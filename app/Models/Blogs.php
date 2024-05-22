<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_image',
        'sub_image1',
        'sub_image2',
        'blog_title',
        'blog_body',
        'quotes',
        'quotes_author',
        'blog_author',
        'author_id',
        'time_to_read',
        'blog_tags',
        'blog_id'
    ];
}
