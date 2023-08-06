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
        Schema::create('property_tenant', function (Blueprint $table) {
			$table->id();
			$table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
			$table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');

			$table->dateTime('rent_start_date')->nullable();
			$table->dateTime('rent_end_date')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_tenant');
    }
};
