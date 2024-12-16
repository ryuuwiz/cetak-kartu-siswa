<?php

namespace App\Filament\Resources\DesainKartuResource\Pages;

use App\Filament\Resources\DesainKartuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDesainKartu extends EditRecord
{
    protected static string $resource = DesainKartuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
