<?php

namespace Bytefum\Demoav;

use Illuminate\Database\Eloquent\Model;

class Demoav extends Model
{
    protected $table = 'demoavs';

    protected $fillable = [
        'name',
    ];
}
