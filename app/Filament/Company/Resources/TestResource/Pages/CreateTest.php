<?php

namespace App\Filament\Company\Resources\TestResource\Pages;

use App\Filament\Company\Resources\TestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTest extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
