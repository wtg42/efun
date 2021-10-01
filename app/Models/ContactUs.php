<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'contact_us';
    protected $appends = array('test'); // 輸出 array 必須添加，名稱必須對應 Accessor。
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    /**
     * 姓名第一個字母大寫輸出
     * @param mixed $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return $this->attributes['name'] = ucfirst($value);
    }

    /**
     * Test Accessor.
     * @param mixed $value
     * @return string
     */
    public function getTestAttribute($value)
    {
        $value = 'Test Attrinute: ' . $this->name;
        return $value;
    }
}
