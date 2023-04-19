<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
    ];

    public function products(){
        return $this->belongsToMany(Product::class, 'product_tags')->withTimestamps();
    }
    public function type(){
        return $this->belongsTo(TagType::class)->withTimestamps();
    }
}
