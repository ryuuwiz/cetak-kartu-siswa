<?php

namespace App\Filament\Resources\CetakKartuResource\Pages;

use App\Filament\Resources\CetakKartuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCetakKartus extends ListRecords
{
    protected static string $resource = CetakKartuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
