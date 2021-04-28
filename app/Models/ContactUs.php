<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    protected $appends = array('test'); // 陣列新增model欄位
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    public function getNameAttribute($value)
    {
        return $this->attributes['name'] = ucfirst($value);
    }

    public function getTestAttribute($value)
    {
        $value = 'Test Value:'.$this->name;
        return $this->attributes['test'] = $value;
    }
}
