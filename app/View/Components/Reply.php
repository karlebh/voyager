<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Reply extends Component
{
    public $replies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($replies)
    {
        $this->replies = $replies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.reply');
    }
}
