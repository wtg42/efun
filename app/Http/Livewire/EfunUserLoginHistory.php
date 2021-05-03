<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EfunUserLoginHistory extends Component
{
    public function render()
    {
        // with() 吃orm function name
        $userLoginHistory = User::with('userLog')->paginate(1);
        return view('livewire.efun-user-login-history', ['userLoginHistory' => $userLoginHistory]);
    }
}
