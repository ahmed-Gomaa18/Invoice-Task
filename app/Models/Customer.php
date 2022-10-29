<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];


    public function orders()
    {
        return $this->hasMany(Invoice::class, 'customer_id');
    }


}
