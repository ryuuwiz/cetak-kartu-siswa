<?php

namespace App\Filament\Resources\KartuSiswaResource\Pages;

use App\Filament\Resources\KartuSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKartuSiswas extends ListRecords
{
    protected static string $resource = KartuSiswaResource::class;

    protected static ?string $title = 'Kartu Siswa';
    protected static ?string $slug = 'kartu-siswa';

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = 'Kartu Siswa';

    protected ?string $heading = 'Kartu Siswa';

    protected function getHeaderActions(): array
    {
        return [];
    }
}
