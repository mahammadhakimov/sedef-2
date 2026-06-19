<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('posts')
                    ->image(),
                Textarea::make('excerpt')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->columnSpanFull(),
                TextInput::make('comments_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('likes_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                DateTimePicker::make('published_at'),
            ]);
    }
}
