<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EfunFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $renderData = array(
            'addr' => '地址：台北市松江路1號12樓之一',
            'tel'  => '電話：(02)25159288',
            'mail' => 'EMAIL：efun.cb@gmail.com',
        );
        return view('components.efun-footer', $renderData);
    }
}
