<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Коротко о нас');
            $table->string('subtitle')->default('Хочу представить Вам команду "Твой сервис", готовую оказать широкий спектр услуг по программным продуктам линейки "1С:Предприятие".');
            $table->string('description')->default('Наша команда обладает глубокими знаниями и многолетним опытом работы с платформой 1С, что позволяет предложить высококачественные услуги');
            $table->string('image')->default('assets/img/bg-2.png');
            $table->timestamps();
        });

        DB::table('about')->insert([
            'title' => 'Коротко о нас',
            'subtitle' => 'Хочу представить Вам команду "Твой сервис", готовую оказать широкий спектр услуг по программным продуктам линейки "1С:Предприятие".',
            'description' => 'Наша команда обладает глубокими знаниями и многолетним опытом работы с платформой 1С, что позволяет предложить высококачественные услуги',
            'image' => 'assets/img/bg-2.png'
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
