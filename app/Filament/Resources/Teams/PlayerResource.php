<?php

namespace App\Filament\Resources\Teams;

use App\Enums\SocialEnum;
use App\Filament\Resources\Teams\PlayerResource\Pages;
use App\Filament\Resources\Teams\PlayerResource\RelationManagers;
use App\Models\Player;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use RalphJSmit\Filament\SEO\SEO;
use Webbingbrasil\FilamentAdvancedFilter\Filters;

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Teams';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\TextInput::make('surname')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('nickname')
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\TextInput::make('nationality')
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('img')
                                    ->directory('player-photos')
                                    ->image()
                                    ->columnSpan(2)
                                    ->required(),
                                Forms\Components\Repeater::make('socials')
                                    ->schema([
                                        Forms\Components\TextInput::make('url')->required(),
                                        Forms\Components\Select::make('type')
                                            ->options(SocialEnum::class)
                                            ->required(),
                                    ])
                                    ->columnSpan(2),
                            ])->columns(),
                    ])
                    ->columnSpan(2),

                Forms\Components\Group::make()->schema([
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\Placeholder::make('created_at')
                                ->label('Creato')
                                ->content(fn ($record): string => $record ? $record->created_at->diffForHumans() : '-'),
                            Forms\Components\Placeholder::make('updated_at')
                                ->label('Ultima modifica')
                                ->content(fn ($record): string => $record ? $record->updated_at->diffForHumans() : '-'),
                        ]),
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\BelongsToSelect::make('user_id')
                                ->placeholder("Seleziona un'opzione")
                                ->relationship('user', 'name')
                                ->searchable()
                                ->default(fn ($livewire) => $livewire instanceof Pages\EditPlayer ? $livewire->record->user : null),
                            Forms\Components\BelongsToSelect::make('current_team_id')
                                ->label('Team Corrente')
                                ->placeholder("Seleziona un'opzione")
                                ->relationship('team', 'name')
                                ->searchable()
                                ->default(fn ($livewire) => $livewire instanceof Pages\EditPlayer ? $livewire->record->team : null),
                        ]),
                ]),

                Forms\Components\Section::make('SEO')
                    ->description('Impostazioni SEO')
                    ->collapsed()
                    ->schema([
                        SEO::make(),
                    ]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('surname')->searchable(),
                Tables\Columns\TextColumn::make('nickname')->searchable(),
                Tables\Columns\ImageColumn::make('img'),
                Tables\Columns\TextColumn::make('nationality'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Filters\TextFilter::make('nationality'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TeamsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
