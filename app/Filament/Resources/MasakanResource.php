<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use App\Models\Masakan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MasakanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MasakanResource\RelationManagers;

class MasakanResource extends Resource
{
    protected static ?string $model = Masakan::class;
    protected static ?string $navigationGroup = 'Entri Makanan';
    protected static ?string $navigationLabel = 'Masakan';
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('img')
                    ->label('Gambar Masakan')
                    ->required()
                    ->columnSpan(2),

                TextInput::make('nama_masakan')
                    ->required()
                    ->label('Nama Masakan'),

                TextInput::make('harga')
                    ->required()
                    ->required()
                    ->label('Harga')
                    ->numeric(),

                Textarea::make('deskripsi_masakan')
                    ->label('Deskripsi Masakan')
                    ->required()
                    ->autosize()
                    ->columnSpan(2),

                Select::make('status_masakan')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'habis' => 'Habis',
                    ])
                    ->required()
                    ->label('Status Masakan'),

                Select::make('kategori_masakan')
                    ->options([
                        'minuman' => 'Minuman',
                        'makanan' => 'Makanan',
                    ])
                    ->required()
                    ->label('Kategori Masakan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_masakan')
                    ->sortable()
                    ->label('Nama Masakan'),

                TextColumn::make('harga')
                    ->sortable()
                    ->money('IDR')
                    ->label('Harga'),

                TextColumn::make('status_masakan')
                    ->sortable()
                    ->label('Status Masakan'),

                TextColumn::make('kategori_masakan')
                    ->sortable()
                    ->label('Kategori Masakan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
        return [
            'index' => Pages\ListMasakans::route('/'),
            'create' => Pages\CreateMasakan::route('/create'),
            'edit' => Pages\EditMasakan::route('/{record}/edit'),
        ];
    }
}
