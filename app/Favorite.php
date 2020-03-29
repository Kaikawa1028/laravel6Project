<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'created_at'
    ];
}
