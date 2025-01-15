<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->slideOver()
                ->color("primary")
                ->icon('heroicon-o-document-arrow-up')
                ->use(\App\Imports\SiswaImport::class),
            \pxlrbt\FilamentExcel\Actions\Pages\ExportAction::make()
                ->label('Export'),
            Actions\CreateAction::make(),
        ];
    }
}
