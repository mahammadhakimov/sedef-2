<?php

namespace App\Filament\Resources\OpeningHours\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OpeningHourForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('day')
                    ->required(),
                TimePicker::make('opens_at'),
                TimePicker::make('closes_at'),
                Toggle::make('is_closed')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
