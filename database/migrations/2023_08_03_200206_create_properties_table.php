<?php

use App\Domain\Property\Enums\PropertyConditionEnum;
use App\Domain\Property\Enums\PropertyFurnishingEnum;
use App\Domain\Property\Enums\PropertyStatusEnum;
use App\Domain\Property\Enums\PropertyTypeEnum;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('condition')->default(PropertyConditionEnum::NEW->value);
            $table->string('status')->default(PropertyStatusEnum::AVAILABLE->value);
            $table->string('type')->default(PropertyTypeEnum::APARTMENT->value);
            $table->string('furnishing')->default(PropertyFurnishingEnum::UNFURNISHED->value);
            $table->integer('bedrooms')->default(1);
            $table->integer('bathrooms')->default(1);
            $table->integer('parking')->default(1);
            $table->string('size')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->boolean('verified')->default(0);
            $table->boolean('featured')->default(0);

            $table->foreignId('landlord_id')->constrained('landlords')->onDelete('cascade');

            $table->dateTime('published_at')->nullable();
            $table->dateTime('expired_at')->nullable();
            $table->dateTime('sold_at')->nullable();
            $table->dateTime('archived_at')->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->dateTime('featured_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
