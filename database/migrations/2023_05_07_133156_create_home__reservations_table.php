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
        Schema::create('home__reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('User_Id')->constrained('users')->onDelete('cascade');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->foreignId('Home_Services_Id')->constrained('home_services__services')->onDelete('cascade');
            $table->date('res_date');
            $table->decimal('price');
            $table->string('status')->default('Pending');
            $table->text('comment')->nullable();
            $table->string('HomeServicesName');
            $table->string('code')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('home__reservations');
    }
};
