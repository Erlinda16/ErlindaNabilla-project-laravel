<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResepBahanResource\Pages;
use App\Filament\Resources\ResepBahanResource\RelationManagers;
use App\Models\Resep_Bahan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResepBahanResource extends Resource
{
    protected static ?string $model = Resep_Bahan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_bahan'),
                Forms\Components\TextInput::make('resep_id')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_bahan'),
                Tables\Columns\TextColumn::make('resep_id')
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
            'index' => Pages\ListResepBahans::route('/'),
            'create' => Pages\CreateResepBahan::route('/create'),
            'edit' => Pages\EditResepBahan::route('/{record}/edit'),
        ];
    }
}
