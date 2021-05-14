<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Table;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;

class StaffResource extends Resource
{
    public static $icon = 'heroicon-o-users';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\Grid::make([
                    Components\TextInput::make('name')->autofocus()->required(),
                    Components\TextInput::make('surname')->required(),
                    Components\TextInput::make('role')->required(),
                    Components\KeyValue::make('socials')
                ])->columns(2),

                Components\Grid::make([
                    Components\FileUpload::make('img')
                        ->directory('staff-photos')
                        ->image()
                        ->imageCropAspectRatio('4:3')
                        ->loadingIndicatorPosition($position = 'right')
                        ->panelAspectRatio('4:3')
                        ->removeUploadButtonPosition($position = 'left')
                        ->uploadButtonPosition($position = 'right')
                        ->uploadProgressIndicatorPosition($position = 'right')
                        ->visibility($visibility = 'public')
                        ->required()
                ])->columns(2),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('name')->primary(),
                Columns\Text::make('surname'),
                Columns\Text::make('role'),
            ])
            ->filters([
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
            Pages\ListStaff::routeTo('/', 'index'),
            Pages\CreateStaff::routeTo('/create', 'create'),
            Pages\EditStaff::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
