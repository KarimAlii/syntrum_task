<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'image'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
