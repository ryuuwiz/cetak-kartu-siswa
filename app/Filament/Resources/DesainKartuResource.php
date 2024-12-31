<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DesainKartuResource\Pages;
use App\Models\DesainKartu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DesainKartuResource extends Resource
{
    protected static ?string $model = DesainKartu::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $slug = 'desain-kartu';

    protected static ?string $navigationGroup = 'Kartu';
    public static function canCreate(): bool
    {
        $data = DesainKartu::query()->first();
        if ($data) {
            return false;
        }
        return true;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->downloadable(true)
                    ->openable(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->searchable(false)
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('public')
                    ->label('')
                    ->limit(1)
                    ->width('750px')
                    ->height('243px'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDesainKartus::route('/'),
            'create' => Pages\CreateDesainKartu::route('/create'),
            'edit' => Pages\EditDesainKartu::route('/{record}/edit'),
        ];
    }
}
