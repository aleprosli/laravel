<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mc1 extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = 'mcform';

    protected $fillable = [
        'name', 'typeofleaves','reason', 'user_id', 'date_to', 'date_from', 'created_by', 'status'
    ];
}
