<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebStorageOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'short_description', 
        'description', 
        'price', 
        'views', 
        'tags_id'
    ];
}
