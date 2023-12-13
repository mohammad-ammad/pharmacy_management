<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_description', 'quantity', 'price', 'user_id'];

    //relation with user table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relation with orders table
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
