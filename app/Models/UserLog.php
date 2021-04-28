<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'login_time',
        'login_ip',
    ];

    public function User()
    {
        return $this->belongsTo('User');
    }
}
