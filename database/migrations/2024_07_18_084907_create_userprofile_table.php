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
        Schema::create('userprofile', function (Blueprint $table) {
            $table->id();
            $table->string('first_name' , 255);
            $table->string('last_name' , 255);
            $table->string('email' , 255)->unique;
            $table->string('phone_number' , 255)->unique;
            $table->string('address' , 255);
            $table->string('state' , 255);
            $table->string('country' , 255);
            $table->string('language' , 255);
            $table->string('image' , 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofile');
    }
};
