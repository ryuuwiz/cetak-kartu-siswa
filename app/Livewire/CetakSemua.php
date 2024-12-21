<?php

namespace App\Livewire;

use App\Models\DesainKartu;
use App\Models\Siswa;
use Livewire\Attributes\Title;
use Livewire\Component;

class CetakSemua extends Component
{
    public $kartu;
    public $siswa;

    public function mount(): void
    {
        $this->kartu = DesainKartu::query()->first();
        $this->siswa = Siswa::all();
    }

    #[Title("Cetak Kartu Semua")]
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.cetak-semua');
    }
}
