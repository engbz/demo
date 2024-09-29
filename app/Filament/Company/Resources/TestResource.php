<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\TestResource\Pages;
use App\Filament\Company\Resources\TestResource\RelationManagers;
use App\Models\MarineVehicleModels\MarineVehiclePackage;
use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Component as Livewire;

class TestResource extends Resource
{
    use Translatable;

    protected static ?string $model = MarineVehiclePackage::class;

    protected static ?string $label = "Test";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                CheckboxList::make('marineVehiclePackage')
                    ->dehydrated(false)
                    ->columnSpanFull()
                    ->columns(4)
                    ->options(fn(Livewire $livewire) => MarineVehiclePackage::whereLocale('title', $livewire->activeLocale)->pluck('title', 'id')),

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
            'index' => Pages\ListTests::route('/'),
            'create' => Pages\CreateTest::route('/create'),
            'edit' => Pages\EditTest::route('/{record}/edit'),
        ];
    }
}
