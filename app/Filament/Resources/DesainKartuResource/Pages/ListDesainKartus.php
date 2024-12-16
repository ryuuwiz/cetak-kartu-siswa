<?php

namespace App\Filament\Resources\DesainKartuResource\Pages;

use App\Filament\Resources\DesainKartuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDesainKartus extends ListRecords
{
    protected static string $resource = DesainKartuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
