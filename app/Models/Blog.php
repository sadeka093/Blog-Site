<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory;
    protected $fillable = ['blog_title', 'blog_details', 'image'];

    // Additional model logic, such as relationships, can be defined here
}
