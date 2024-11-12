<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->longText('services'); // Для хранения HTML списка услуг
            $table->string('title_color'); // Для хранения цвета заголовка
            $table->timestamps();
        });

        // Добавление записей для каждого пакета услуг
        DB::table('pricings')->insert([
            [
                'title' => 'Пакет Базовый',
                'price' => '60 000 тг/год',
                'services' => '<ul>
                        <li>Уведомление о выходе обновлений по почте</li>
                        <li>Доступ к сайту 1С для получения файлов обновлений</li>
                        <li>Консультации по телефону</li>
                        <li>Час работы 9000 тг/час</li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Обновление 1с конфигурации и платформы</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Обновление СОНО</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Настройка Кабинета налогоплательщика</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Настройка электронной счет-фактуры</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Обновление регламентированных отчетов</s></span></li>
                    </ul>',
                'title_color' => '#07d5c0',
            ],
            [
                'title' => 'Пакет Стандарт',
                'price' => '90 000 тг/год',
                'services' => '<ul>
                        <li>Уведомление о выходе обновлений по почте</li>
                        <li>Доступ к сайту 1С для получения файлов обновлений</li>
                        <li>Консультации по телефону</li>
                        <li>Час работы 9000 тг/час</li>
                        <li>Обновление 1с конфигурации и платформы</li>
                        <li>Обновление СОНО</li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Настройка Кабинета налогоплательщика</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Настройка электронной счет-фактуры</s></span></li>
                        <li style="color: rgb(149, 165, 166);"><span style="color: rgb(149, 165, 166);"><s>Обновление регламентированных отчетов</s></span></li>
                    </ul>',
                'title_color' => '#65c600',
            ],
            [
                'title' => 'Пакет Продвинутый',
                'price' => '180 000 тг/год',
                'services' => '<ul>
                        <li>Уведомление о выходе обновлений по почте</li>
                        <li>Доступ к сайту 1С для получения файлов обновлений</li>
                        <li>Консультации по телефону</li>
                        <li>Час работы 9000 тг/час</li>
                        <li>Обновление 1с конфигурации и платформы</li>
                        <li>Обновление СОНО</li>
                        <li>Настройка Кабинета налогоплательщика</li>
                        <li>Настройка электронной счет-фактуры</li>
                        <li>Обновление регламентированных отчетов</li>
                    </ul>',
                'title_color' => '#ff901c',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
