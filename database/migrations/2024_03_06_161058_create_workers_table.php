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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passport');
            $table->string('number');
            $table->string('mail');
            $table->string('home');
            $table->string('exp');
//            $table->boolean('workshift');
            $table->time('worktime');
            $table->string('jobtitle');
            $table->string('salary');
            $table->boolean('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
