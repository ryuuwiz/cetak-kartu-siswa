<?php

namespace App\Filament\Resources\DesainKartuResource\Pages;

use App\Filament\Resources\DesainKartuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDesainKartu extends CreateRecord
{
    protected static string $resource = DesainKartuResource::class;

    protected static bool $canCreateAnother = false;
}
