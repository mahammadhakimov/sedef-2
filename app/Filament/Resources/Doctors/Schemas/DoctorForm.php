<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position'),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('doctors')
                    ->image(),
                TextInput::make('facebook_url')
                    ->url(),
                TextInput::make('twitter_url')
                    ->url(),
                TextInput::make('google_plus_url')
                    ->url(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
