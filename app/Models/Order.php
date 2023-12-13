<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'product_id',
        'quantity',
        'price',
        'status',
        'payment_method',
        // Add other fields as needed
    ];

    //relation with user table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relation with product table
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
