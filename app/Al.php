<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Al extends Model
{
    public $table = 'alform';

    protected $fillable = [
        'name', 'reason', 'user_id', 'date_to', 'date_from', 'created_by'
    ];
}
