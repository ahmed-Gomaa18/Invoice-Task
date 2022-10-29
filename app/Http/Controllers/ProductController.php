<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show()
    {
        return view('Product.index', [
            'products' => Product::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function create()
    {
        return view('Product.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:7|max:70|unique:products,name',
            'price' => 'required|integer',
        ]);

        // Create Customer
        Product::create($attributes);

        return redirect('products');

    }

}
