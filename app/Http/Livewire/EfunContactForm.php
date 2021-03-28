<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class EfunContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.efun-contact-form');
    }

    public function submitForm()
    {

        $this->validate();
        // save contact
        $post = ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $post->save();

        session()->flash('success_message', '已收到你的提交資料，我們會盡快與你聯絡。');
        $this->reset();
    }

    public function dismissSuccessMessage()
    {
        session()->flash('success_message', null);
    }
}
