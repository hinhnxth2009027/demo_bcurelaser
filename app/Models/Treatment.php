<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'protocol',
        'protocol_images',
        'protocol_images_caption',
        'protocol_video',
        'protocol_video_caption',
        'sort_number'
    ];

}
