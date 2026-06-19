<?php

namespace App\Filament\Resources\Funfacts;

use App\Filament\Resources\Funfacts\Pages\CreateFunfact;
use App\Filament\Resources\Funfacts\Pages\EditFunfact;
use App\Filament\Resources\Funfacts\Pages\ListFunfacts;
use App\Filament\Resources\Funfacts\Schemas\FunfactForm;
use App\Filament\Resources\Funfacts\Tables\FunfactsTable;
use App\Models\Funfact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FunfactResource extends Resource
{
    protected static ?string $model = Funfact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    public static function form(Schema $schema): Schema
    {
        return FunfactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FunfactsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFunfacts::route('/'),
            'create' => CreateFunfact::route('/create'),
            'edit' => EditFunfact::route('/{record}/edit'),
        ];
    }
}
