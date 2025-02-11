<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\RegistrationResource\Pages;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('position')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('student_id')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('institution')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('country')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('has_paper'),
                    Forms\Components\TextInput::make('author_type')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('paper_title')
                        ->maxLength(255),
                    Forms\Components\Toggle::make('join_trip'),
                    Forms\Components\Toggle::make('join_dinner'),
                    Forms\Components\TextInput::make('participation_option')
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('payment')
                        ->disk('local')
                        ->directory('payments')
                        ->visibility('private')
                        ->downloadable()
                        ->deletable(false)
                        ->required(),
                    // Forms\Components\TextInput::make('pax')
                    //     ->required()
                    //     ->numeric()
                    //     ->default(1),
                    Forms\Components\TextInput::make('status')
                        ->required()
                        ->maxLength(255)
                        ->default('pending'),
                    Forms\Components\TextInput::make('reference')
                        ->readOnly(),
                    // Forms\Components\Toggle::make('is_edited')
                    //     ->disabled(),

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('position')->sortable(),
                Tables\Columns\TextColumn::make('institution')
                    ->searchable(),
                Tables\Columns\IconColumn::make('has_paper')
                    ->boolean(),
                Tables\Columns\IconColumn::make('join_trip')
                    ->boolean(),
                Tables\Columns\IconColumn::make('join_dinner')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('payment')->disk('local')->visibility('private'),
                // Tables\Columns\TextColumn::make('pax')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        StatusEnum::PENDING->value => StatusEnum::PENDING->value,
                        StatusEnum::APPROVED->value => StatusEnum::APPROVED->value,
                        StatusEnum::CONFIRMED->value => StatusEnum::CONFIRMED->value,
                        StatusEnum::REJECTED->value => StatusEnum::REJECTED->value,
                        StatusEnum::CANCELED->value => StatusEnum::CANCELED->value,
                    ])
                    ->sortable(),
                // Tables\Columns\TextColumn::make('reference')
                //     ->searchable(),
                // Tables\Columns\IconColumn::make('is_edited')
                //     ->boolean(),
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
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
                ExportBulkAction::make(),
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
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
