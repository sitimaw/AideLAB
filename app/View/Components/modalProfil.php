<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalProfil extends Component
{
    public $status;
    public $auth;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status, $auth)
    {
        $this->status = $status;
        $this->auth = $auth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-profil');
    }
}
