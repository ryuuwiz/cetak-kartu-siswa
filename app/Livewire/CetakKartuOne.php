<?php

namespace App\Livewire;

use App\Models\DesainKartu;
use Livewire\Attributes\Url;
use Livewire\Component;

class CetakKartuOne extends Component
{
    #[Url]
    public $id;

    public $kartu;
    public $row;

    public function mount(): void
    {
        $this->kartu = DesainKartu::query()->first();
        $this->row = \App\Models\Siswa::query()->findOrFail(id: $this->id);
        $this->row->tgl_lhr = \Carbon\Carbon::parse($this->row->tgl_lhr)->format('d-m-Y');
    }

    public function render()
    {
        return view('livewire.cetak-kartu-one');
    }
}
