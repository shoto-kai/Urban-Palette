<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Unitydic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'unity_name',
        'latitude',
        'longitude'
        ];
}
