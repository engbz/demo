<?php

namespace App\Models\MarineVehicleModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MarineVehiclePackage extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "marine_vehicle_packages";

    protected $guarded = [];

    public array $translatable = ['title', 'description', 'content', 'attachments'];

    protected $casts = [
        'attachments' => 'array'
    ];

}
