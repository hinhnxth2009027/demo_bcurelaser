<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacebookReview extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'content',
        'date',
        'thumbnail',
        'sort_number'
    ];
}
