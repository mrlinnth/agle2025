<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class Committees extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 7;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::firstOrFail()->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                    Repeater::make('committees')
                    ->label('Scientific committee')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('institute')->required(),
                        FileUpload::make('photo')
                        ->disk('public')
                        ->required(),
                    ])
                    ->columns(3),
                    Repeater::make('organizers')
                    ->label('Conference organizers')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('institute')->required(),
                        FileUpload::make('photo')
                        ->disk('public')
                        ->required(),
                    ])
                    ->columns(3)
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
