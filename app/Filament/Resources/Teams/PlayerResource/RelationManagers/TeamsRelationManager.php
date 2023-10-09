<?php

namespace App\Filament\Resources\Teams\PlayerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Webbingbrasil\FilamentAdvancedFilter\Filters;

class TeamsRelationManager extends \Filament\Resources\RelationManagers\RelationManager
{
    protected static string $relationship = 'teams';

    protected static ?string $recordTitleAttribute = 'name';

    protected static bool $hasAssociateAction = true;

    protected static bool $hasDissociateAction = true;

    protected static bool $hasDissociateBulkAction = true;

    protected static bool $canCreateAnother = false;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')->default('player')->required(),
                Forms\Components\DateTimePicker::make('joined_at')->default(now())->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('joined_at')
                    ->dateTime(),
            ])
            ->filters([
                Filters\TextFilter::make('role'),
            ]);
    }

    public static function attachForm(Form $form): Form
    {
        return $form
            ->schema([
                static::getAttachFormRecordSelect(),
                Forms\Components\TextInput::make('role')->default('player')->required(),
                Forms\Components\DateTimePicker::make('joined_at')->default(now())->required(),
            ]);
    }

    protected function canCreate(): bool
    {
        return false;
    }
}
