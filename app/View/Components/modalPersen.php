<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalPersen extends Component
{
    public $praktikum;
    public $absen;
    public $tugas;
    public $uts;
    public $uas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($praktikum, $absen, $tugas, $uts, $uas)
    {
        $this->praktikum = $praktikum;
        $this->absen = $absen;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-persen');
    }
}
