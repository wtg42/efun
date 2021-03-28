<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class EfunContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    // form reuls
    protected $rules = [
        'name'    => 'required|min:2',
        'email'   => 'required|email',
        'message' => 'required|min:6',
    ];

    protected $messages = [
        'name.required'    => '姓名不能空白',
        'name.min'         => '最少需要2個字',
        'email.required'   => 'Email欄位不能留空',
        'email.email'      => 'Email格式錯誤.',
        'message.required' => '訊息不能空白.',
        'message.min'      => '訊息最少6個字.',
    ];

    // Real-time Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.efun-contact-form');
    }

    // Contact us form submit
    public function submitForm()
    {

        $validatedData = $this->validate();
        // save contact
        $post = ContactUs::create($validatedData);
        $post->save();
        session()->flash('success_message', '已收到你的提交資料，我們會盡快與你聯絡。');
        $this->reset();
    }

    // dismiss Contact us form success message box
    public function dismissSuccessMessage()
    {
        session()->flash('success_message', null);
    }
}
