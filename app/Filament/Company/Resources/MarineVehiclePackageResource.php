<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\MarineVehiclePackageResource\Pages;
use App\Models\MarineVehicleModels\MarineVehiclePackage;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Component as Livewire;

class MarineVehiclePackageResource extends Resource
{
    use Translatable;

    protected static ?string $model = MarineVehiclePackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('title'),
                Textarea::make('description'),
                Textarea::make('content'),
                Textarea::make('price'),
                Repeater::make('attachments')
                    ->schema([
                        TextInput::make('name')->required(),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMarineVehiclePackages::route('/'),
            'create' => Pages\CreateMarineVehiclePackage::route('/create'),
            'view' => Pages\ViewMarineVehiclePackage::route('/{record}'),
            'edit' => Pages\EditMarineVehiclePackage::route('/{record}/edit'),
        ];
    }
}
