<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Product_Controller;
use App\Http\Controllers\Main_Controller;

class products_table extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_description', 'product_quantity', 'product_price', 'product_image'];
}
