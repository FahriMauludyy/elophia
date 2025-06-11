<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // <-- Import ini

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'architectures',
        'price',
        'room_size',
        'image',
    ];
    protected $casts = [
        'price' => 'float',
    ];
}
