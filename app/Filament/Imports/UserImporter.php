<?php

namespace App\Filament\Imports;

use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class UserImporter extends Importer
{
    protected static ?string $model = User::class;

    public static function getColumns(): array
    {
        return [
<<<<<<< HEAD
            ImportColumn::make('nim'),
            ImportColumn::make('name'),
            ImportColumn::make('username'),
            ImportColumn::make('email'),
            ImportColumn::make('password'),
=======
            ImportColumn::make('nim')
                ->numeric()
                ->rules(['numeric']),
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('username')
                ->rules(['max:50']),
            ImportColumn::make('email')
                ->rules(['email', 'max:255']),
            ImportColumn::make('password')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
>>>>>>> bd0903c7e84b65cd37a9856610d04cb0e6794b08
            ImportColumn::make('role'),
        ];
    }

    public function resolveRecord(): ?User
    {
        return User::firstOrNew([
            // Update existing records, matching them by `$this->data['column_name']`
            'nim' => $this->data['nim'],
        ]);

        return new User();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your user import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
