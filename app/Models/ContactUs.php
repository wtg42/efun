<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
     * 測試api輸出
     * @param mixed $value
     * @return string
     */
    public function getTestAttribute($value)
    {
        $value = 'Test Value:' . $this->name;
        return $this->attributes['test'] = $value;
    }
}
