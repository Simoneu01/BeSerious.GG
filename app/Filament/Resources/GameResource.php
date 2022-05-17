<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use App\Models\Team;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use SebastiaanKloos\FilamentCodeEditor\Components\CodeEditor;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\BelongsToSelect::make('home_team_id')
                    ->placeholder("Seleziona un'opzione")
                    ->relationship('homeTeam', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Team $record) => "{$record->name} - ID: {$record->id}")
                    ->searchable()
                    ->default(fn ($livewire) => $livewire instanceof Pages\EditGame ? $livewire->record->homeTeam : null),
                Forms\Components\BelongsToSelect::make('away_team_id')
                    ->placeholder("Seleziona un'opzione")
                    ->relationship('awayTeam', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Team $record) => "{$record->name} - ID: {$record->id}")
                    ->searchable()
                    ->default(fn ($livewire) => $livewire instanceof Pages\EditGame ? $livewire->record->awayTeam : null),

                Forms\Components\TextInput::make('gameshard_match_id')
                    ->required()
                    ->maxLength(255),
                CodeEditor::make('data')
                    ->afterStateHydrated(function ($state, $set) {
                        $set('data', json_encode($state));
                    })
                    ->dehydrateStateUsing(fn ($state) => (array) json_decode($state))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('home_team_id'),
                Tables\Columns\TextColumn::make('away_team_id'),
                Tables\Columns\TextColumn::make('gameshard_match_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
