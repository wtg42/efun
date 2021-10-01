<?php

namespace App\Http\Livewire;

use App\Models\UserLog;
use Livewire\Component;
use Livewire\WithPagination;

class EfunUserLoginHistory extends Component
{
    use WithPagination; // livewire分頁用 沒加會變成reload分頁

    public function render()
    {
        // with() 吃orm function name
        // $userLoginHistory = User::with('userLog')->paginate(1);
        $userLoginHistory = UserLog::with('user')->orderBy('login_time', 'desc')->paginate(4);
        return view('livewire.efun-user-login-history', ['userLoginHistory' => $userLoginHistory]);
    }
}
