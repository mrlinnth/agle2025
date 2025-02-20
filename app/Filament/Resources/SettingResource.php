<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('event_name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('event_title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_deadline')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('contact_map')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('contact_phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_mail')
                    ->maxLength(255),
                Forms\Components\TextInput::make('noti_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('event_name')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('event_title')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('event_duration')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('event_location')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('event_deadline')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('contact_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('noti_email')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}
