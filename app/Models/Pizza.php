<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'enter the name of the table';
    protected $casts = [
        'assortment' => 'array' 
    ];
}
