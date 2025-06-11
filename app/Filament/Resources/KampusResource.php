<?php

namespace App\Filament\Resources;

// Sesuaikan namespace Pages dengan KampusResource
use App\Filament\Resources\KampusResource\Pages; 
use App\Filament\Resources\KampusResource\RelationManagers;
// Sesuaikan model dengan Kampus
use App\Models\Kampus; 
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KampusResource extends Resource
{
    // Menggunakan model Kampus
    protected static ?string $model = Kampus::class; 

    // Mengganti ikon agar lebih relevan
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2'; 
    protected static ?string $navigationLabel = 'Kampus';      // Nama yang tampil di sidebar
    protected static ?string $pluralModelLabel = 'Kampus';   // Nama untuk judul halaman list
    protected static ?string $modelLabel = 'Kampus';         // Nama untuk satu item (misal: "Buat Transaksi Baru")
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menggunakan pola dari contoh Anda
                Forms\Components\TextInput::make('nama') 
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('latitude')
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Menggunakan pola dari contoh Anda
                Tables\Columns\TextColumn::make('nama') 
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        // Sesuaikan nama Pages dengan KampusResource
        return [
            'index' => Pages\ListKampuses::route('/'),
            'create' => Pages\CreateKampus::route('/create'),
            'edit' => Pages\EditKampus::route('/{record}/edit'),
        ];
    }
}