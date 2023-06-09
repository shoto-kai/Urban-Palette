<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'image_url',
    'text',
    ];
}
    