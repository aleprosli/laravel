<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Leave;

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
        'name', 'typeofleave','reason', 'user_id', 'date_to', 'date_from', 'created_by', 'status'
    ];

    public function leave()
    {
        return $this->belongsTo(Leave::class, 'typeofleave');
    }
}
