<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalMateri extends Component
{
    public $praktikum; 
    public $header; 
    public $tombol; 
    public $judul; 
    public $link; 
    public $param; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, $tombol, $link, $param, $judul="", $praktikum="")
    {
        $this->praktikum = $praktikum;
        $this->judul = $judul;
        $this->header = $header;
        $this->tombol = $tombol;
        $this->link = $link;
        $this->param = $param;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-materi');
    }
}
