<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class ConferenceDetails extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 6;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::firstOrFail()->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Conference Dates')
                    ->schema([
                        TextInput::make('conference.details.presentation_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.details.presentation_date')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.details.trip_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.details.trip_date')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('conference.details.body')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'codeBlock',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('conference.details.dinner_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.details.dinner_date')
                            ->required()
                            ->maxLength(255),

                    ])
                    ->columns(2),
                Fieldset::make('Important Dates')
                    ->schema([
                        TextInput::make('conference.important.abstract_deadline_title')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('conference.important.abstract_deadline_date')
                            ->required(),
                        TextInput::make('conference.important.abstract_acceptance_title')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('conference.important.abstract_acceptance_date')
                            ->required(),
                        TextInput::make('conference.important.earlybird_deadline_title')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('conference.important.earlybird_deadline_date')
                            ->required(),
                        TextInput::make('conference.important.regular_deadline_title')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('conference.important.regular_deadline_date')
                            ->required(),

                    ])
                    ->columns(2),
                Fieldset::make('Conference Fee')
                    ->schema([
                        TextInput::make('conference.fee.type_1_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_1_earlybird')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_1_regular')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_2_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_2_earlybird')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_2_regular')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_3_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_3_earlybird')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_3_regular')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_4_title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_4_earlybird')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('conference.fee.type_4_regular')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('conference.fee.optional')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'codeBlock',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->required()
                            ->columnSpan(3),
                        Textarea::make('conference.fee.best_abstract')
                            ->required()
                            ->columnSpan(3),
                    ])
                    ->columns(3),
                Fieldset::make('Conference Location')
                    ->schema([
                        TextInput::make('conference.location.title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('conference.location.address')
                            ->required(),
                        Textarea::make('conference.location.map')
                            ->required(),

                    ])
                    ->columns(1),
                Fieldset::make('Accommodation and Transportation')
                    ->schema([
                        RichEditor::make('conference.accommodation')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'codeBlock',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->required(),
                        RichEditor::make('conference.transportation')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'codeBlock',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->required(),

                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            Setting::where('id', 1)->update($data);
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}
