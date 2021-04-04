<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class EfunContactUsList extends Component
{
    public $userList;
    public function render()
    {
        $this->userList = ContactUs::all();

        return view('livewire.efun-contact-us-list', $this->userList);
    }
}
// to-do wire:click刪除紀錄
