<?php

namespace App\Filament\Company\Resources\TestResource\Pages;

use App\Filament\Company\Resources\TestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTest extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
