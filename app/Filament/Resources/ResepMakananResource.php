<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResepMakananResource\Pages;
use App\Filament\Resources\ResepMakananResource\RelationManagers;
use App\Models\Resep_Makanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResepMakananResource extends Resource
{
    protected static ?string $model = Resep_Makanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_resep'),
                Forms\Components\TextInput::make('deskripsi')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_resep'),
                Tables\Columns\TextColumn::make('deskripsi')->limit(0)

            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResepMakanans::route('/'),
            'create' => Pages\CreateResepMakanan::route('/create'),
            'edit' => Pages\EditResepMakanan::route('/{record}/edit'),
        ];
    }
}
