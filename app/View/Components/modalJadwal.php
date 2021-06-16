<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalJadwal extends Component
{
    public $praktikum;
    public $hari;
    public $ruang;
    public $jamMulai;
    public $jamAkhir;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($praktikum, $hari, $ruang, $jamMulai, $jamAkhir)
    {
        $this->praktikum = $praktikum;
        $this->hari = $hari;
        $this->ruang = $ruang;
        $this->jamMulai = $jamMulai;
        $this->jamAkhir = $jamAkhir;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-jadwal');
    }
}
