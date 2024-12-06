<?php

namespace App\Filament\Resources\SayuranResource\Pages;

use App\Filament\Resources\SayuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSayurans extends ListRecords
{
    protected static string $resource = SayuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
