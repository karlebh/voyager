<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Comments extends Component
{
    public $comments;

    public $likeCount;

    public $isLiked;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comments, $likeCount, $isLiked)
    {
        $this->comments = $comments;
        $this->likeCount = $likeCount;
        $this->isLiked = $isLiked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.comments');
    }
}
