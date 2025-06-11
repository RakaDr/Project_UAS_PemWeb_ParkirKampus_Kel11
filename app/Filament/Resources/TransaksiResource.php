<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;
    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';
    protected static ?string $navigationLabel = 'Transaksi';      // Nama yang tampil di sidebar
    protected static ?string $pluralModelLabel = 'Transaksi';   // Nama untuk judul halaman list
    protected static ?string $modelLabel = 'Transaksi';         // Nama untuk satu item (misal: "Buat Transaksi Baru")

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kendaraan_id')
                    ->relationship(name: 'kendaraan', titleAttribute: 'nopol')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('area_parkir_id')
                    ->relationship(name: 'areaParkir', titleAttribute: 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\DatePicker::make('tanggal')->required(),
                Forms\Components\TimePicker::make('mulai')->required(),
                Forms\Components\TimePicker::make('akhir'),
                Forms\Components\TextInput::make('biaya')->numeric()->prefix('Rp'),
                Forms\Components\Textarea::make('keterangan')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kendaraan.nopol')->searchable(),
                Tables\Columns\TextColumn::make('areaParkir.nama')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->date('d M Y')->sortable(),
                Tables\Columns\TextColumn::make('biaya')->money('IDR')->sortable(),
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}