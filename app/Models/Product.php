<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'images',
        'description',
        'sort_number',
        'is_featured'
    ];

    public function specifications(){
        return $this->hasMany(TechnicalSpecification::class);
    }


}
