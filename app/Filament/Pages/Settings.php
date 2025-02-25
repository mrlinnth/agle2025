<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 4;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::firstOrFail()->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('General')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('noti_email')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('logo')
                            ->disk('public')
                            ->required(),
                    ])
                    ->columns(2),
                Fieldset::make('Contact')
                    ->schema([
                        Textarea::make('contact.map')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('contact.address')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('contact.phone')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('contact.email')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Fieldset::make('Countdown')
                    ->schema([
                        TextInput::make('countdown.title')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('countdown.date')
                            ->required(),
                    ])
                    ->columns(2),
                Fieldset::make('Footer')
                    ->schema([
                        FileUpload::make('footer.center_logos')
                            ->disk('public')
                            ->multiple()
                            ->reorderable()
                            ->appendFiles()
                            ->required(),
                        FileUpload::make('footer.end_logo')
                            ->disk('public')
                            ->required(),
                    ])
                    ->columns(2),
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
