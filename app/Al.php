<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Al extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'alform';

    protected $fillable = [
        'reason', 'user_id', 'date_to', 'date_from', 'created_by'
    ];
}
