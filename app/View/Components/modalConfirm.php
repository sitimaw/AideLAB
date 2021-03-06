<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalConfirm extends Component
{
    public $pesan;
    public $status;
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pesan, $status, $slug="")
    {
        $this->pesan = $pesan;
        $this->status = $status;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-confirm');
    }
}
