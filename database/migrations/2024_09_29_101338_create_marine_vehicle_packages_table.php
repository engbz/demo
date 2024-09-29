<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marine_vehicle_packages', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('team_id')->constrained()->cascadeOnDelete();
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('content')->nullable();
            $table->json('attachments');
            $table->string('price');
            $table->boolean('isActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marine_vehicle_packages');
    }
};
