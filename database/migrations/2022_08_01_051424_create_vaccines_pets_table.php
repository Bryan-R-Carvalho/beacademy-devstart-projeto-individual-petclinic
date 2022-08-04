<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('vaccines_pets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('vaccine_id')->constrained('id')->on('vaccines')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pet_id')->constrained('id')->on('pets')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccines_pets');
    }
    
};