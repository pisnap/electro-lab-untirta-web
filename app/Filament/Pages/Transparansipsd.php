<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;

class Transparansipsd extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static string $view = 'filament.pages.transparansipsd';

    protected static ?string $navigationLabel = 'Transparansi PSD';

    protected static ?string $title = 'Transparansi Nilai';

    protected static ?string $slug = 'transparansi-pengolahan-sinyal-digital';

    public $users;

    public function mount()
    {
        $this->users = User::with('Pengolahansinyaldigital')->get();
    }
}
