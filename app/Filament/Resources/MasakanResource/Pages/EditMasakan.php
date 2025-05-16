<?php

namespace App\Filament\Resources\MasakanResource\Pages;

use App\Filament\Resources\MasakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasakan extends EditRecord
{
    protected static string $resource = MasakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
