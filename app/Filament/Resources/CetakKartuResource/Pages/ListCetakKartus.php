<?php

namespace App\Filament\Resources\CetakKartuResource\Pages;

use App\Filament\Resources\CetakKartuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListCetakKartus extends ListRecords
{
    protected static string $resource = CetakKartuResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
            Action::make('Cetak Semua')
                ->icon('heroicon-o-printer')
                ->color('primary')
                ->url(fn () => route('cetak-semua'))
        ];
    }
}
