<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPosition extends Model
{
    protected $table = 'user_positions';

    protected $fillable = [
        'user_id',
        'position_id'
    ];

    public $timestamps = true;
}
