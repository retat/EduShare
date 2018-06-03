<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['category_id', 'title','body'];

    protected $hidden = [];
}
