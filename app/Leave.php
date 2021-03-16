<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    public $table = 'type_of_leaves';

    protected $fillable = [
        'name'
    ];
}
