<?php

namespace App\Filament\Resources\ResepMakananResource\Pages;

use App\Filament\Resources\ResepMakananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResepMakanan extends EditRecord
{
    protected static string $resource = ResepMakananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
