<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns;
use Filament\Resources\Table;

class ArticleResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Components\Grid::make([
                    Components\TextInput::make('title')->autofocus()->required(),
                    Components\Select::make('type')
                        ->placeholder('Select a type')
                        ->options([
                            'article' => 'Articolo',
                            'video' => 'Video',
                        ]),
                    Components\DateTimePicker::make('publish_at'),
                    Components\TagsInput::make('tags'),
                ])->columns(2),

                Components\Textarea::make('body')
                    ->required()
                    ->rows(3),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('title'),
                Columns\TextColumn::make('type'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
