<?php

namespace App\Filament\Company\Resources\MarineVehiclePackageResource\Pages;

use App\Filament\Company\Resources\MarineVehiclePackageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMarineVehiclePackage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = MarineVehiclePackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
