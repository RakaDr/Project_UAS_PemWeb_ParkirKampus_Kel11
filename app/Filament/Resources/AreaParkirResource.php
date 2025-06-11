<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AreaParkirResource\Pages;
use App\Models\AreaParkir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AreaParkirResource extends Resource
{
    protected static ?string $model = AreaParkir::class;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Area Parkir';      // Nama yang tampil di sidebar
    protected static ?string $pluralModelLabel = 'Area Parkir';   // Nama untuk judul halaman list
    protected static ?string $modelLabel = 'Area Parkir';         // Nama untuk satu item (misal: "Buat Area Parkir Baru")
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kampus_id')
                    ->relationship(name: 'kampus', titleAttribute: 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('keterangan')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->searchable(),
                Tables\Columns\TextColumn::make('kampus.nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kapasitas')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAreaParkirs::route('/'),
            'create' => Pages\CreateAreaParkir::route('/create'),
            'edit' => Pages\EditAreaParkir::route('/{record}/edit'),
        ];
    }
}