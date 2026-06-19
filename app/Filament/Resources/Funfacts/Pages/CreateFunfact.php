<?php

namespace App\Filament\Resources\Funfacts\Pages;

use App\Filament\Resources\Funfacts\FunfactResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFunfact extends CreateRecord
{
    protected static string $resource = FunfactResource::class;
}
