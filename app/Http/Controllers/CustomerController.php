<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        return view('Customer.index', [
            'customers' => Customer::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function create()
    {
        return view('Customer.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:7|max:70',
            'email' => 'required|email|unique:customers,email',
            'address' => 'required|min:15|max:150',
        ]);

        Customer::create($attributes);

        return redirect('clients');

    }


}
