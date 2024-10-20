<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KartuSiswaResource\Pages;
use App\Models\KartuSiswa;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class KartuSiswaResource extends Resource
{
    protected static ?string $model = KartuSiswa::class;

    protected static ?string $slug = 'kartu-siswa';

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function canCreate(): bool
    {
        return true;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('kartu_siswa')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\ImageColumn::make('image')->disk('public')->width(750)->height(243)
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKartuSiswas::route('/'),
            'edit' => Pages\EditKartuSiswa::route('/{record}/edit'),
        ];
    }
}
