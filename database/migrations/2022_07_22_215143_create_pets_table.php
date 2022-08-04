<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('breed')->nullable();
            $table->string('color')->nullable();
            $table->string('hair_type')->nullable();
            $table->string('gender')->nullable();
            $table->float('weight')->nullable();
            $table->float('age')->nullable();
            $table->string('details')->nullable();
            $table->foreignId('owner_id')->constrained('id')->on('owners')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
