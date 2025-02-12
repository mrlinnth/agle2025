<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\SubmissionResource\Pages;
use App\Models\Submission;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

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
                    Forms\Components\TextInput::make('institution')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('country')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('first_author')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('corresponding_author')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('other_author')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('paper_title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\CheckboxList::make('presentation_options')
                        ->options([
                            'Poster Presentation' => 'Poster Presentation',
                            'Oral Presentation' => 'Oral Presentation',
                        ])
                        ->required(),
                    Forms\Components\FileUpload::make('file')
                        ->disk('local')
                        ->directory('papers')
                        ->visibility('private')
                        ->downloadable()
                        ->deletable(false)
                        ->required(),
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
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('paper_title'),
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
            'index' => Pages\ListSubmissions::route('/'),
            'create' => Pages\CreateSubmission::route('/create'),
            'edit' => Pages\EditSubmission::route('/{record}/edit'),
        ];
    }
}
