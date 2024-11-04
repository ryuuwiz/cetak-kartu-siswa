<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CetakKartuResource\Pages;
use App\Filament\Resources\CetakKartuResource\RelationManagers;
use App\Models\Siswa;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class CetakKartuResource extends Resource
{
    protected static ?string $model = Siswa::class;
    protected static ?string $modelLabel = 'Cetak Kartu';
    protected static ?string $slug = 'cetak-kartu';
    protected static ?string $navigationGroup = 'Kartu';
    protected static ?string $navigationIcon = 'heroicon-o-printer';

    public static function canCreate(): bool
    {
       return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nis')
                    ->label("NIS")
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->label("NISN")
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label("Nama Lengkap")
                    ->searchable(),
                Tables\Columns\TextColumn::make('tmpt_lhr')
                    ->label("Tempat Lahir")
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_lhr')
                    ->label("Tanggal Lahir")
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jk')
                    ->label("Jenis Kelamin")
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label("Email")
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label("Alamat")
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_telp')
                    ->label("No. Telepon")
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label("Foto")
                    ->disk('local')
                    ->label('Foto')
                    ->visibility('private')
                    ->width('100px')
                    ->height('100px'),
            ])
            ->filters([
            ])
            ->actions([
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCetakKartus::route('/'),
        ];
    }
}
