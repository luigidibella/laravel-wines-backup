<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'winery',
        'wine',
        'average',
        'reviews',
        'slug',
        'location',
        'image',
    ];
}
