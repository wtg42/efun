<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Livewire\Component;
use Livewire\WithPagination;

class EfunContactUsList extends Component
{
    use WithPagination; // livewire分頁用 沒加會變成reload分頁
    // public $userList;

    public function render()
    {
        // $this->userList = ContactUs::all();
        // return view('livewire.efun-contact-us-list');
        $userList = ContactUs::paginate(5);
        return view('livewire.efun-contact-us-list', ['userList' => $userList]); // 分頁用
    }

    public function removeFromTableRow($removeID)
    {
        $contactUs = ContactUs::find($removeID);
        $contactUs->delete();
    }
}

// to-do wire:click刪除紀錄
