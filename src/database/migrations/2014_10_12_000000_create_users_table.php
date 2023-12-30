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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->integer('age')->nullable();
            $table->enum('role', ['Администратор', 'Клиент', 'Тренер']);
            $table->enum('gender', ['Мужчина', 'Женщина']);
            $table->string('image')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->integer('size_cloth')->nullable();
            $table->char('phone', 18)->unique(); //Пример:  +7 (999) 999-99-99
            $table->char('code', 6)->nullable();
            $table->string('password_admin')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
