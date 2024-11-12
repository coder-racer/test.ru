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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });

        DB::table('services')->insert([
            ['title' => 'Услуги', 'description' => 'Доработка типовых конфигураций, чтобы они соответствовали Вашим уникальным потребностям', 'image' => 'assets/img/values-1.png'],
            ['title' => 'Услуги', 'description' => 'Методическая поддержка по типовым конфигурациям, чтобы Вы могли эффективно использовать их в своем бизнесе', 'image' => 'assets/img/values-2.png'],
            ['title' => 'Услуги', 'description' => 'Разработка новых конфигураций, созданных специально под Ваши бизнес-потребности', 'image' => 'assets/img/values-3.png'],
            ['title' => 'Услуги', 'description' => 'Автоматизация существующих бизнес-процессов с помощью комплекса программных продуктов 1С, чтобы повысить эффективность Вашей работы', 'image' => 'assets/img/values-4.png'],
            ['title' => 'Услуги', 'description' => 'Настройка интеграций между учетными системами, обеспечивающая безошибочное взаимодействие между ними', 'image' => 'assets/img/values-5.png'],
            ['title' => 'Услуги', 'description' => 'Настройка интеграций с маркетплейсами для расширения Вашей аудитории и увеличения продаж', 'image' => 'assets/img/values-6.png'],
            ['title' => 'Услуги', 'description' => 'Анализ и исправление неоптимального кода, чтобы Ваша система работала более эффективно', 'image' => 'assets/img/values-7.png'],
            ['title' => 'Услуги', 'description' => 'Настройка регламентного обслуживания информационных баз', 'image' => 'assets/img/values-8.png']
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
