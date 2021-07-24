<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    protected $appends = array('test'); // 新增 model collections 欄位
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
     * 新增 $this->appends 欄位 對應新增函數輸出
     * @param mixed $value
     * @return string
     */
    public function getTestAttribute($value)
    {
        $value = 'Test Value:' . $this->name;
        return $this->attributes['test'] = $value;
    }
}
