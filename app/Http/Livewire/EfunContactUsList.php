<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use Livewire\WithPagination;

class EfunContactUsList extends Component
{
    use WithPagination; // 分頁用
    // public $userList;

    public function render()
    {
        // $this->userList = ContactUs::all();
        // return view('livewire.efun-contact-us-list');
        $userList = ContactUs::paginate(2);
        return view('livewire.efun-contact-us-list', ['userList' => $userList]); // 分頁用
    }

    public function removeFromTableRow($removeID)
    {
        $contactUs = ContactUs::find($removeID);
        $contactUs->delete();
    }

}
// to-do wire:click刪除紀錄
