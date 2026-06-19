<?php

namespace App\Filament\Resources\Funfacts\Pages;

use App\Filament\Resources\Funfacts\FunfactResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFunfacts extends ListRecords
{
    protected static string $resource = FunfactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
