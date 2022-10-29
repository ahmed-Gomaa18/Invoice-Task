<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'invoice_role_products')
        ->withTimestamps()
        ->withPivot('count', 'subtotal', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}



