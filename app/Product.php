<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';  
    protected $fillable = ['title', 'description'];
    protected $hidden = ['created_at', 'updated_at'];
}
