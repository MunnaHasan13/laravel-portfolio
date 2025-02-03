<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['content'];

    protected $hidden = ['created_at', 'updated_at'];   
}
