<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class ArticleResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
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

    public static function table(Table $table)
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListArticles::routeTo('/', 'index'),
            Pages\CreateArticle::routeTo('/create', 'create'),
            Pages\EditArticle::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
