<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_services__services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('HomeServicesId')->constrained('home_services');
            $table->string('ServiceName');
            $table->string('ServiceDescription');
            $table->double('ServicePrice');
            $table->string('ServiceTime');
            $table->string('ServiceImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_services__services');
    }
};
