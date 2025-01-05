<?php

namespace App\Filament\Imports;

use App\Models\Plagiarismerl;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class PlagiarismerlImporter extends Importer
{
    protected static ?string $model = Plagiarismerl::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('nim')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('name')
                ->rules(['max:50']),
            ImportColumn::make('unit')
                ->numeric()
                ->rules(['integer']),
        ];
    }

    public function resolveRecord(): ?Plagiarismerl
    {
        // return Plagiarismerl::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Plagiarismerl();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
