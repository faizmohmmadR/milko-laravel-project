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
        Schema::create('purcheses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productID')->nullable();
            $table->foreign('productID')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('userID')->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('branchID')->nullable();
            $table->foreign('branchID')->references('id')->on('branches')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('categoryID')->nullable();
            $table->foreign('categoryID')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('customerID')->nullable();
            $table->foreign('customerID')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->string('unite');
            $table->float('unitePrice');
            $table->float('totalPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purcheses');
    }
};
