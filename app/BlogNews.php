<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogNews extends Model
{
    protected $fillable = [
        "Title",
        "Content",
        "Author",
        "Like",
        "view"
    ];

}
