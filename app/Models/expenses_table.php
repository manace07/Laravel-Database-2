<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expenses_table extends Model
{
    use HasFactory;

    protected $fillable = ['vendor_name', 'cost', 'order_total'];

}
