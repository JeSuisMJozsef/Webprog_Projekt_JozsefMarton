<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'product_name','sku','packaging','stock','price','stock_increased_at','stock_decreased_at'];
    protected $hidden = [
        "stock_increased_at",
        "stock_decreased_at",
        "created_at",
        "updated_at",
    ];
}
