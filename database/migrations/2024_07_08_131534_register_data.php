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
        Schema::create('prducts', function (Blueprint $table) {
            $table->id();
            $table->string('Pname');
            $table->string('Pdescription');
            $table->double('price',12, 2);
            $table->integer('quantity');
            $table->integer('stock');
            $table->string('Abilablequantity');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
