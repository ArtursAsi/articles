<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rss extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link',
        'date',
        'author',
        'enclosure'
    ];
}
