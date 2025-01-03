<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;

class Transparansitd extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static string $view = 'filament.pages.transparansitd';

    protected static ?string $navigationLabel = 'Transparansi TD';

    protected static ?string $title = 'Transparansi Nilai';

    protected static ?string $slug = 'transparansi-teknik-digital';

    public $users;

    public function mount()
    {
        $this->users = User::with('Teknikdigital')->get();
    }
}
