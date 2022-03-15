<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $casts = [
        'items' => 'array'
    ];

    protected $fillable  = [ 'title' , 'city' , 'private' , 'description' ];

}


