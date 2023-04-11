<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_date',
        'price',
        'creditcard',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function products() {
        return $this->belongsToMany(Product::class, 'purchase_products')->withTimestamps();
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_tags')->withTimestamps();
    }
}
