<?php

namespace App\Filament\Resources;

use App\Enums\SocialEnum;
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
                Components\Grid::make()->schema([
                    Components\TextInput::make('name')->autofocus()->required(),
                    Components\TextInput::make('surname')->required(),
                    Components\TextInput::make('role')->required(),
                    Components\Repeater::make('socials')
                        ->schema([
                            Components\TextInput::make('url')->required(),
                            Components\Select::make('type')
                                ->options(SocialEnum::class)
                                ->required(),
                        ])
                        ->columns(2)
                ]),

                Components\FileUpload::make('img')
                    ->directory('staff-photos')
                    ->image()
                    ->imageCropAspectRatio('4:3')
                    ->required()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('id')->sortable(),
                Columns\TextColumn::make('name')->sortable()->searchable(),
                Columns\TextColumn::make('surname')->sortable()->searchable(),
                Columns\TextColumn::make('role')->sortable()->searchable(),
                Columns\TextColumn::make('created_at')->sortable(),
                Columns\TextColumn::make('updated_at')->sortable(),
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
