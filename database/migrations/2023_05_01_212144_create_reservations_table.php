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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->foreignId('User_Id')->constrained('users')->onDelete('cascade');
            $table->foreignId('Salon_Services_Id')->constrained('salon_services')->onDelete('cascade');
            $table->string('status')->default('Pending');
            $table->text('comment')->nullable();
            $table->date('res_date');
            $table->decimal('price');
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
        Schema::dropIfExists('reservations');
    }
};
