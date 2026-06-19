<?php

namespace App\Filament\Resources\Funfacts\Pages;

use App\Filament\Resources\Funfacts\FunfactResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFunfact extends EditRecord
{
    protected static string $resource = FunfactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
