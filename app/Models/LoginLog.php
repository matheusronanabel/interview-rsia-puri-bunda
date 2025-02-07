<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LoginLog extends Model
{
    protected $table = 'login_logs';

    protected $fillable = [
        'user_id',
        'login_time'
    ];

    public $timestamps = true;

    /**
     * Get all of the users for the LoginLog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
