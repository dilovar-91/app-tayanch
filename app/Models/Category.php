<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $hidden = ['seo_title','seo_description','seo_keywords'];

    protected $casts = ['name'=>'array', 'description'=>'array'];
}
