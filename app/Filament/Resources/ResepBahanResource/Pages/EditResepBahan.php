<?php

namespace App\Filament\Resources\ResepBahanResource\Pages;

use App\Filament\Resources\ResepBahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResepBahan extends EditRecord
{
    protected static string $resource = ResepBahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
