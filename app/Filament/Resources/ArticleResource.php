<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use Filament\Forms\Components;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns;
use Filament\Tables\Table;
use RalphJSmit\Filament\SEO\SEO;

class ArticleResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Grid::make()
                    ->schema([
                        Components\TextInput::make('title')->autofocus()->required(),
                        Components\Select::make('type')
                            ->placeholder('Select a type')
                            ->options([
                                'article' => 'Articolo',
                                'video' => 'Video',
                            ]),
                        Components\DateTimePicker::make('publish_at'),
                        Components\TagsInput::make('tags'),
                    ]),

                Components\Textarea::make('body')
                    ->required()
                    ->rows(3),

                Components\Section::make('SEO')
                    ->description('Impostazioni SEO')
                    ->collapsed()
                    ->schema([
                        SEO::make(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('id')->sortable(),
                Columns\TextColumn::make('title')->searchable(),
                Columns\TextColumn::make('type'),
                Columns\TextColumn::make('created_at')->sortable(),
                Columns\TextColumn::make('updated_at')->sortable(),
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
