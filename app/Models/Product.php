<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name', 
        'slug', 
        'description', 
        'price', 
        'image', 
        'brand_id',
        'category_id',
        'review_id',
         'stock',
        'sale',
        'status'];
}