<?php

namespace App\Filament\Company\Resources\MarineVehiclePackageResource\Pages;

use App\Filament\Company\Resources\MarineVehiclePackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarineVehiclePackage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = MarineVehiclePackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
