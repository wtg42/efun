<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
