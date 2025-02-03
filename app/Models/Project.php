<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'img_path', 'url'];

    protected $hidden = ['created_at', 'updated_at'];
}
