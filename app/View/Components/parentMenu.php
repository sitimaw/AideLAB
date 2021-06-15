<?php

namespace App\View\Components;

use Illuminate\View\Component;

class parentMenu extends Component
{
    public $nama;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nama, $link)
    {
        $this->nama = $nama;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.parent-menu');
    }
}
