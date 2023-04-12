<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    function tags() {
        return $this->hasMany(Tag::class);
    }
}
