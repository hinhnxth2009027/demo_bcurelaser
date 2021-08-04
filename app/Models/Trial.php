<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trial extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'logo',
        'thumbnail',
        'content',
        'file',
        'type',
        'sort_number',
    ];
}
