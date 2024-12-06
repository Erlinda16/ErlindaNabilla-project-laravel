<?php

namespace App\Filament\Resources\ResepMakananResource\Pages;

use App\Filament\Resources\ResepMakananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResepMakanans extends ListRecords
{
    protected static string $resource = ResepMakananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
