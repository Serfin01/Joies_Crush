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
        'stock',
    ];

    function purchases() {
        return $this->belongsToMany(Purchase::class, 'purchase_products')->withTimestamps();
    }
    function tags() {
        return $this->belongsToMany(Tag::class, 'product_tags')->withTimestamps();
    }
    public function usersFavourites() {
        return $this->belongsToMany(User::class, 'users_favourites')->withTimestamps();
    }
}
