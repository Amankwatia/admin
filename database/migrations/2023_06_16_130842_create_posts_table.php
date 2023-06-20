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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('index_num');
            $table->string('enrol_code', 6)->nullable();
            $table->string('surname');
            $table->string('Other_Names');
            $table->date('dob')->nullable();
            $table->string('hometown')->nullable();
            $table->string('email')->nullable();
            $table->string('guardian')->nullable();
            $table->string('contact')->nullable();
            $table->string('occupation')->nullable();
            $table->string('residence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
