<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiData extends Model
{
   
    use HasFactory;
    
    protected $table = 'api_data';
    protected $fillable = [
        'product_name',
        'product_code',
        'unit_price',
        'qty',
        'total_price',
    ];// Replace with actual columns
}

