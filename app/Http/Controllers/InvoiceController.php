<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show()
    {
        
        return view('Invoice.index', [
            'invoices' =>  Invoice::with(['products', 'customer'])->orderBy('id', 'DESC')->get(),
            'customer_count' => Customer::count(),
            'product_count' => Product::count(),
            'invoice_count' => Invoice::count(),
        ]);
    }

    public function create()
    {
        return view('Invoice.create', [
            'customers' => Customer::all(),
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        // Check & Valid
        $request->validate([
            'customer' => 'required',
            'count' => 'required|integer',
            'product' => 'required'
        ]);
        // Create Invoice
        $invoice = Invoice::create([
            'customer_id' => $request->customer,
            'number' => random_int(000001, 999999),
            'note' => $request->note,
        ]);

        
        // Get product from session and delete
        // Update Invoice
        foreach($request->session()->pull('invoice') as $session){
            $invoice->products()->attach($session['product_id'], ['count' => $session['count'], 'subtotal' => $session['total']]);
            $invoice->total += $session['total'];
        }

        $invoice->save();
        
        return redirect('/');
      
    }


    // For Ajax
    public function addition(Request $request)
    {
        $info_product = $request->session()->get('invoice');
        $product = Product::find($request->product);
        $info_product[$product->id] = [
            'product_id' => $product->id,
            'product_name' => $product->name,
            'price' => $product->price,
            'count' => $request->count,
            'total' => ($product->price * $request->count),
        ];

        $request->session()->put('invoice', $info_product);
        $subtotal = $product->price * $request->count;
        
        return([
            'detail' => "* $product->name: Price[ $product->price ] * Quantity[ $request->count ] = Total[ $subtotal $ ]    \n",
            'subtotal' => $subtotal,
            'session' => session('invoice'),
        ]);

    }



}