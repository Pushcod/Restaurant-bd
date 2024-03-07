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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('number_client');
            $table->string('name');
            $table->string('number_phone');
            $table->string('email');
            $table->boolean('count_client');
            $table->date('date_up');
            $table->date('date_create');
<<<<<<< HEAD:database/migrations/2024_03_06_161105_create_clients_table.php
            $table->boolean('number_table');
=======
>>>>>>> 3bbc84b2d957c866cf129596b969e7553c104ecb:database/migrations/2024_03_06_205919_create_clients_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
