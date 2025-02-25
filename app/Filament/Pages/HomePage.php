<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;

class HomePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 5;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::firstOrFail()->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Banner')
                    ->schema([
                        TextInput::make('home.banner.heading')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('home.banner.sub_heading')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('home.banner.main_title')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('home.banner.background_image')
                            ->disk('local')
                            ->directory('images')
                            ->visibility('private')
                            ->downloadable()
                            ->deletable(false)
                            ->required(),
                        TextInput::make('home.banner.duration')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('home.banner.location')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Fieldset::make('About')
                    ->schema([
                        TextInput::make('home.about.heading')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('home.about.body')
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
                Fieldset::make('Themes')
                    ->schema([
                        TextInput::make('home.themes.heading')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('home.themes.body')
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
                Fieldset::make('Publication')
                    ->schema([
                        TextInput::make('home.publication.heading')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('home.publication.body')
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
