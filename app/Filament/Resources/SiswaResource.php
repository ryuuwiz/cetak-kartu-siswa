<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Filament\Resources\SiswaResource\RelationManagers;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $slug = 'siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nis')
                    ->label("NIS")
                    ->required(),
                Forms\Components\TextInput::make('nisn')
                    ->label("NISN")
                    ->required(),
                Forms\Components\TextInput::make('nama_lengkap')
                    ->label("Nama Lengkap")
                    ->required(),
                Forms\Components\TextInput::make('tmpt_lhr')
                    ->label("Tempat Lahir")
                    ->required(),
                Forms\Components\DatePicker::make('tgl_lhr')
                    ->label("Tanggal Lahir")
                    ->required(),
                Forms\Components\Select::make('jk')
                    ->label("Jenis Kelamin")
                    ->options([
                        'Laki-Laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label("Email")
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('alamat')
                    ->label("Alamat")
                    ->required(),
                Forms\Components\TextInput::make('no_telp')
                    ->label("No. Telepon")
                    ->tel()
                    ->required(),
                Forms\Components\FileUpload::make('foto')
                    ->label("Foto")
                    ->image()
                    ->downloadable(true)
                    ->openable(true)
                    ->disk('local')
                    ->directory('siswa')
                    ->visibility('private'),
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
            ]);
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
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
