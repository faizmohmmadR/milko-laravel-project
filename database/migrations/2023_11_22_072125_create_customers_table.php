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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->string('customerFatherName');
            $table->string('customerPhone');
            $table->string('CustomerType');
            $table->unsignedBigInteger('customerAddress')->nullable();
            $table->foreign('customerAddress')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('branch')->nullable();
            $table->foreign('branch')->references('id')->on('branches')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
