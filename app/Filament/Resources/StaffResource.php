<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns;

class StaffResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
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
                        ->panelAspectRatio('4:3')
                        ->required()
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('name'),
                Columns\TextColumn::make('surname'),
                Columns\TextColumn::make('role'),
            ])
            ->filters([
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
