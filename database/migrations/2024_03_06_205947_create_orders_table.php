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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->foreignId('menu_id');
            $table->date('date_up');
<<<<<<<< HEAD:database/migrations/2024_03_07_085124_create_orders_table.php
            $table->foreignId('client_id');
            $table->boolean('isActive');

========
            $table->string('number_table');
>>>>>>>> 3bbc84b2d957c866cf129596b969e7553c104ecb:database/migrations/2024_03_06_205947_create_orders_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
