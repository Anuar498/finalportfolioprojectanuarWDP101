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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('room');
            $table->string('logo')->nullable();
            $table->string('checkin');
            $table->string('checkout');
            $table->string('price');
            $table->string('tags');
            $table->string('accommodations');
            $table->string('members');
            $table->string('email');
            $table->string('youremail');
            $table->string('fullname');
            $table->string('name');
            $table->string('phonenumber');
            $table->string('contactnumber');
            $table->string('location');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
