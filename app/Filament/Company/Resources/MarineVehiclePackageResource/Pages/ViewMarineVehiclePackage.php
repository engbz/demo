<?php

namespace App\Filament\Company\Resources\MarineVehiclePackageResource\Pages;

use App\Filament\Company\Resources\MarineVehiclePackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMarineVehiclePackage extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = MarineVehiclePackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
        ];
    }
}
