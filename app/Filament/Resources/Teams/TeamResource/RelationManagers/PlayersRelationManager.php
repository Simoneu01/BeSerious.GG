<?php

namespace App\Filament\Resources\Teams\TeamResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Webbingbrasil\FilamentAdvancedFilter\Filters;

class PlayersRelationManager extends \Filament\Resources\RelationManagers\RelationManager
{
    protected static string $relationship = 'players';

    protected static ?string $recordTitleAttribute = 'nickname';

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
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('surname')->searchable(),
                Tables\Columns\TextColumn::make('nickname')->searchable(),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('joined_at')
                    ->dateTime(),
            ])
            ->filters([
                Filters\TextFilter::make('nationality'),
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
