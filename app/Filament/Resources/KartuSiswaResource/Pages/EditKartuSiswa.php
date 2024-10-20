<?php

namespace App\Filament\Resources\KartuSiswaResource\Pages;

use App\Filament\Resources\KartuSiswaResource;
use Filament\Resources\Pages\EditRecord;

class EditKartuSiswa extends EditRecord
{
    protected static string $resource = KartuSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
