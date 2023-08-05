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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description')->nullable();
            $table->string('condition')->default('new');
            $table->string('status')->default('available');
            $table->string('type')->default('unfurnished');
            $table->string('bedrooms')->default(1);
            $table->string('bathrooms')->default(1);
            $table->string('parking')->default(1);
            $table->string('size')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('verified')->default(0);
            $table->string('featured')->default(0);

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->dateTime('published_at')->nullable();
            $table->dateTime('expired_at')->nullable();
            $table->dateTime('sold_at')->nullable();
            $table->dateTime('archived_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->dateTime('featured_at')->nullable();
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
