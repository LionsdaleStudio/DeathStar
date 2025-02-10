<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stormtrooper extends Model
{
    /** @use HasFactory<\Database\Factories\StormtrooperFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'age',
        'isActive',
        'recruited'
    ];
}
