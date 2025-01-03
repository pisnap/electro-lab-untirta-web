<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use Livewire\Attributes\On;
use Filament\Actions\CreateAction;
<<<<<<< HEAD
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use App\Filament\Exports\UserExporter;
=======
use Filament\Actions\ImportAction;
>>>>>>> bd0903c7e84b65cd37a9856610d04cb0e6794b08
use App\Filament\Imports\UserImporter;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Create User'),
            ImportAction::make()
                ->color('primary')
                ->label('Import User')
                ->modalHeading('Import Data User')
<<<<<<< HEAD
                ->icon('heroicon-o-arrow-up-tray')
                ->importer(UserImporter::class),
            ExportAction::make()
                ->color('primary')
                ->label('Export User')
                ->modalHeading('Export Data User')
                ->icon('heroicon-o-arrow-down-tray')
                ->exporter(UserExporter::class),
=======
                ->icon('heroicon-o-arrow-down-tray')
                ->importer(UserImporter::class),
>>>>>>> bd0903c7e84b65cd37a9856610d04cb0e6794b08
        ];
    }
}
