<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationLabel = 'Kendaraan';      // Nama yang tampil di sidebar
    protected static ?string $pluralModelLabel = 'Kendaraan';   // Nama untuk judul halaman list
    protected static ?string $modelLabel = 'Kendaraan';         // Nama untuk satu item (misal: "Buat Transaksi Baru")
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('jenis_kendaraan_id')
                    ->relationship(name: 'jenis', titleAttribute: 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('merk')->required(),
                Forms\Components\TextInput::make('pemilik')->required(),
                Forms\Components\TextInput::make('nopol')->required()->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('thn_beli')->numeric(),
                Forms\Components\TextInput::make('deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nopol')->searchable(),
                Tables\Columns\TextColumn::make('merk')->searchable(),
                Tables\Columns\TextColumn::make('pemilik')->searchable(),
                Tables\Columns\TextColumn::make('jenis.nama')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}