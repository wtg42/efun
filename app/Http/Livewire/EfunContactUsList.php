<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class EfunContactUsList extends Component
{

    public $userList;

    public function render()
    {
        $this->userList = ContactUs::all();

        return view('livewire.efun-contact-us-list', $this->userList);
    }

    public function removeFromTableRow($removeID)
    {
        $contactUs = ContactUs::find($removeID);
        $contactUs->delete();
    }

}
// to-do wire:click刪除紀錄
