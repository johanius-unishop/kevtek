<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductKindsPropsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        // \DB::table('product_type_properties')->delete();

        \DB::table('product_type_properties')->delete();

        \DB::table('product_type_properties')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:10:41',
                'updated_at' => '2024-06-28 16:10:42',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Тип',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:11:10',
                'updated_at' => '2024-06-28 16:11:11',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Материал вставки',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:11:36',
                'updated_at' => '2024-06-28 16:11:37',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Материал контактов',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:12:00',
                'updated_at' => '2024-06-28 16:12:01',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Покрытие контактов',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:12:24',
                'updated_at' => '2024-06-28 16:12:25',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Количество контактов',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:12:48',
                'updated_at' => '2024-06-28 16:12:50',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Номинальный ток',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:13:12',
                'updated_at' => '2024-06-28 16:13:13',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Номинальное напряжение',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:13:38',
                'updated_at' => '2024-06-28 16:13:39',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:14:05',
                'updated_at' => '2024-06-28 16:14:06',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Присоединение проводников',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:14:05',
                'updated_at' => '2024-06-28 16:14:06',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Поперечное сечение проводников',
                'order_column' => 13,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:14:05',
                'updated_at' => '2024-06-28 16:14:06',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'AWG',
                'order_column' => 14,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:15:15',
                'updated_at' => '2024-06-28 16:15:16',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Типоразмер',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 11:16:39',
                'updated_at' => '2024-07-10 11:16:40',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Тип контактной вставки',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 11:17:35',
                'updated_at' => '2024-07-10 11:17:36',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Материал вставки',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:52:07',
                'updated_at' => '2024-07-10 13:52:09',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Материал контактов',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:52:31',
                'updated_at' => '2024-07-10 13:52:32',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Покрытие контактов',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:52:59',
                'updated_at' => '2024-07-10 13:52:59',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Количество контактов',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:53:23',
                'updated_at' => '2024-07-10 13:53:24',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Номинальный ток',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:53:47',
                'updated_at' => '2024-07-10 13:53:48',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Номинальное напряжение',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:54:10',
                'updated_at' => '2024-07-10 13:54:11',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:54:39',
                'updated_at' => '2024-07-10 13:54:40',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Присоединение проводников',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:55:03',
                'updated_at' => '2024-07-10 13:55:04',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Поперечное сечение проводников',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:55:36',
                'updated_at' => '2024-07-10 13:55:37',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'AWG',
                'order_column' => 13,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:55:58',
                'updated_at' => '2024-07-10 13:55:58',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Тип корпуса',
                'order_column' => 16,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:56:38',
                'updated_at' => '2024-07-10 13:56:39',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Материал корпуса',
                'order_column' => 20,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:57:15',
                'updated_at' => '2024-07-10 13:57:16',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Количество отверстий для ввода кабеля',
                'order_column' => 22,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:57:39',
                'updated_at' => '2024-07-10 13:57:40',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Резьба под гермоввод/гермовводы',
                'order_column' => 23,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:58:08',
                'updated_at' => '2024-07-10 13:58:09',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Элементы фиксации',
                'order_column' => 24,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:58:38',
                'updated_at' => '2024-07-10 13:58:39',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Материал гермоввода',
                'order_column' => 26,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:59:07',
                'updated_at' => '2024-07-10 13:59:08',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Материал уплотнения',
                'order_column' => 27,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:59:31',
                'updated_at' => '2024-07-10 13:59:32',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Тип резьбы',
                'order_column' => 28,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 13:59:53',
                'updated_at' => '2024-07-10 13:59:54',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Диапазон кабелей',
                'order_column' => 29,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:00:44',
                'updated_at' => '2024-07-10 14:00:44',
            ),
            33 =>
            array (
                'id' => 34,
            'name' => 'Размер гайки (номер ключа)',
                'order_column' => 30,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:01:10',
                'updated_at' => '2024-07-10 14:01:11',
            ),
            34 =>
            array (
                'id' => 36,
                'name' => 'Длина резьбы',
                'order_column' => 31,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:02:09',
                'updated_at' => '2024-07-10 14:02:10',
            ),
            35 =>
            array (
                'id' => 38,
                'name' => 'Степень защиты от влаги и пыли',
                'order_column' => 32,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:03:06',
                'updated_at' => '2024-07-10 14:03:07',
            ),
            36 =>
            array (
                'id' => 39,
                'name' => 'Температура эксплуатации',
                'order_column' => 33,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:03:40',
                'updated_at' => '2024-07-10 14:03:41',
            ),
            37 =>
            array (
                'id' => 40,
                'name' => 'Специальные свойства',
                'order_column' => 34,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:04:12',
                'updated_at' => '2024-07-10 14:04:13',
            ),
            38 =>
            array (
                'id' => 41,
                'name' => 'Цвет',
                'order_column' => 35,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:04:34',
                'updated_at' => '2024-07-10 14:04:35',
            ),
            39 =>
            array (
                'id' => 42,
                'name' => 'Характеристики контактной вставки',
                'order_column' => 1,
                'section' => 1,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:40:54',
                'updated_at' => '2024-07-10 14:40:55',
            ),
            40 =>
            array (
                'id' => 43,
                'name' => 'Характеристики корпуса',
                'order_column' => 14,
                'section' => 1,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:42:49',
                'updated_at' => '2024-07-10 14:42:50',
            ),
            41 =>
            array (
                'id' => 44,
                'name' => 'Характеристики гермоввода/гермовводов',
                'order_column' => 25,
                'section' => 1,
                'product_type_id' => 39,
                'created_at' => '2024-07-10 14:49:17',
                'updated_at' => '2024-07-10 14:49:18',
            ),
            42 =>
            array (
                'id' => 46,
                'name' => 'Версия',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-08-20 23:22:21',
                'updated_at' => '2024-08-20 23:22:22',
            ),
            43 =>
            array (
                'id' => 47,
                'name' => 'Нумерация контактов',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 17,
                'created_at' => '2024-08-20 23:24:46',
                'updated_at' => '2024-08-20 23:24:47',
            ),
            44 =>
            array (
                'id' => 48,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 25,
                'created_at' => '2024-08-21 14:13:10',
                'updated_at' => '2024-08-21 14:13:11',
            ),
            45 =>
            array (
                'id' => 49,
                'name' => 'Ширина в модулях',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 25,
                'created_at' => '2024-08-21 14:13:39',
                'updated_at' => '2024-08-21 14:13:40',
            ),
            46 =>
            array (
                'id' => 50,
                'name' => 'Маркировка',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 25,
                'created_at' => '2024-08-21 14:14:01',
                'updated_at' => '2024-08-21 14:14:02',
            ),
            47 =>
            array (
                'id' => 51,
                'name' => 'Ширина в модулях',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:39:36',
                'updated_at' => '2024-08-21 15:39:36',
            ),
            48 =>
            array (
                'id' => 52,
                'name' => 'Тип',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:40:04',
                'updated_at' => '2024-08-21 15:40:05',
            ),
            49 =>
            array (
                'id' => 53,
                'name' => 'Материал вставки',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:40:34',
                'updated_at' => '2024-08-21 15:40:36',
            ),
            50 =>
            array (
                'id' => 54,
                'name' => 'Материал контактов',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:41:08',
                'updated_at' => '2024-08-21 15:41:09',
            ),
            51 =>
            array (
                'id' => 55,
                'name' => 'Количество контактов',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:41:52',
                'updated_at' => '2024-08-21 15:41:53',
            ),
            52 =>
            array (
                'id' => 56,
                'name' => 'Покрытие контактов',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:42:35',
                'updated_at' => '2024-08-21 15:42:36',
            ),
            53 =>
            array (
                'id' => 57,
                'name' => 'Номинальный ток',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:43:07',
                'updated_at' => '2024-08-21 15:43:08',
            ),
            54 =>
            array (
                'id' => 58,
                'name' => 'Номинальное напряжение',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:43:33',
                'updated_at' => '2024-08-21 15:43:34',
            ),
            55 =>
            array (
                'id' => 59,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:43:55',
                'updated_at' => '2024-08-21 15:43:56',
            ),
            56 =>
            array (
                'id' => 60,
                'name' => 'Присоединение проводников',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:44:23',
                'updated_at' => '2024-08-21 15:44:24',
            ),
            57 =>
            array (
                'id' => 61,
                'name' => 'Поперечное сечение проводников',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-21 15:44:44',
                'updated_at' => '2024-08-21 15:44:44',
            ),
            58 =>
            array (
                'id' => 62,
                'name' => 'Совместимость',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-22 00:27:53',
                'updated_at' => '2024-08-22 00:27:55',
            ),
            59 =>
            array (
                'id' => 63,
                'name' => 'Назначение',
                'order_column' => 13,
                'section' => 0,
                'product_type_id' => 24,
                'created_at' => '2024-08-22 00:28:20',
                'updated_at' => '2024-08-22 00:28:21',
            ),
            60 =>
            array (
                'id' => 64,
                'name' => 'Тип',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:35:15',
                'updated_at' => '2024-08-22 00:35:16',
            ),
            61 =>
            array (
                'id' => 65,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:35:43',
                'updated_at' => '2024-08-22 00:35:44',
            ),
            62 =>
            array (
                'id' => 66,
                'name' => 'Материал уплотнения',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:36:11',
                'updated_at' => '2024-08-22 00:36:12',
            ),
            63 =>
            array (
                'id' => 67,
                'name' => 'Материал клапана',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:36:46',
                'updated_at' => '2024-08-22 00:36:46',
            ),
            64 =>
            array (
                'id' => 68,
                'name' => 'Количество пневматических линий',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:37:20',
                'updated_at' => '2024-08-22 00:37:21',
            ),
            65 =>
            array (
                'id' => 69,
                'name' => 'Диаметр',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:37:48',
                'updated_at' => '2024-08-22 00:37:49',
            ),
            66 =>
            array (
                'id' => 70,
                'name' => 'Рабочее давление',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:38:26',
                'updated_at' => '2024-08-22 00:38:27',
            ),
            67 =>
            array (
                'id' => 71,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 37,
                'created_at' => '2024-08-22 00:39:15',
                'updated_at' => '2024-08-22 00:39:16',
            ),
            68 =>
            array (
                'id' => 72,
                'name' => 'Ширина в модулях',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 23,
                'created_at' => '2024-08-22 09:37:36',
                'updated_at' => '2024-08-22 09:37:37',
            ),
            69 =>
            array (
                'id' => 73,
                'name' => 'Тип',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 23,
                'created_at' => '2024-08-22 09:37:58',
                'updated_at' => '2024-08-22 09:37:59',
            ),
            70 =>
            array (
                'id' => 74,
                'name' => 'Материал',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 23,
                'created_at' => '2024-08-22 09:38:18',
                'updated_at' => '2024-08-22 09:38:19',
            ),
            71 =>
            array (
                'id' => 75,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 23,
                'created_at' => '2024-08-22 09:38:42',
                'updated_at' => '2024-08-22 09:38:43',
            ),
            72 =>
            array (
                'id' => 76,
                'name' => 'Ширина в модулях',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:50:20',
                'updated_at' => '2024-08-22 09:50:21',
            ),
            73 =>
            array (
                'id' => 77,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:50:47',
                'updated_at' => '2024-08-22 09:50:48',
            ),
            74 =>
            array (
                'id' => 78,
                'name' => 'Количество пневматических линий',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:51:23',
                'updated_at' => '2024-08-22 09:51:24',
            ),
            75 =>
            array (
                'id' => 79,
                'name' => 'Диаметр пневматичских линий',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:51:52',
                'updated_at' => '2024-08-22 09:51:54',
            ),
            76 =>
            array (
                'id' => 80,
                'name' => 'Совместимость',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:52:11',
                'updated_at' => '2024-08-22 09:52:12',
            ),
            77 =>
            array (
                'id' => 81,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 27,
                'created_at' => '2024-08-22 09:52:37',
                'updated_at' => '2024-08-22 09:52:38',
            ),
            78 =>
            array (
                'id' => 82,
                'name' => 'Тип',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:54:27',
                'updated_at' => '2024-08-22 11:54:28',
            ),
            79 =>
            array (
                'id' => 83,
                'name' => 'Материал изолятора',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:54:54',
                'updated_at' => '2024-08-22 11:54:54',
            ),
            80 =>
            array (
                'id' => 84,
                'name' => 'Материал контактов',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:55:11',
                'updated_at' => '2024-08-22 11:55:12',
            ),
            81 =>
            array (
                'id' => 85,
                'name' => 'Покрытие контактов',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:55:31',
                'updated_at' => '2024-08-22 11:55:32',
            ),
            82 =>
            array (
                'id' => 86,
                'name' => 'Количество контактов',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:55:47',
                'updated_at' => '2024-08-22 11:55:48',
            ),
            83 =>
            array (
                'id' => 87,
                'name' => 'Импеданс',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:56:03',
                'updated_at' => '2024-08-22 11:56:04',
            ),
            84 =>
            array (
                'id' => 88,
                'name' => 'Номинальный ток',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:56:19',
                'updated_at' => '2024-08-22 11:56:20',
            ),
            85 =>
            array (
                'id' => 89,
                'name' => 'Номинальное напряжение',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:56:34',
                'updated_at' => '2024-08-22 11:56:36',
            ),
            86 =>
            array (
                'id' => 90,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:56:50',
                'updated_at' => '2024-08-22 11:56:51',
            ),
            87 =>
            array (
                'id' => 91,
                'name' => 'Присоединение проводников',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:57:06',
                'updated_at' => '2024-08-22 11:57:06',
            ),
            88 =>
            array (
                'id' => 92,
                'name' => 'Поперечное сечение проводников',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:57:22',
                'updated_at' => '2024-08-22 11:57:23',
            ),
            89 =>
            array (
                'id' => 93,
                'name' => 'AWG',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 11:57:41',
                'updated_at' => '2024-08-22 11:57:42',
            ),
            90 =>
            array (
                'id' => 94,
                'name' => 'Диаметр кабеля',
                'order_column' => 13,
                'section' => 0,
                'product_type_id' => 12,
                'created_at' => '2024-08-22 12:48:11',
                'updated_at' => '2024-08-22 12:48:12',
            ),
            91 =>
            array (
                'id' => 95,
                'name' => 'Тип',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:06:50',
                'updated_at' => '2024-08-22 13:06:51',
            ),
            92 =>
            array (
                'id' => 96,
                'name' => 'Типоразмер',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:07:44',
                'updated_at' => '2024-08-22 13:07:48',
            ),
            93 =>
            array (
                'id' => 97,
                'name' => 'Назначение',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:08:14',
                'updated_at' => '2024-08-22 13:08:15',
            ),
            94 =>
            array (
                'id' => 98,
                'name' => 'Ширина в модулях',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:08:44',
                'updated_at' => '2024-08-22 13:08:45',
            ),
            95 =>
            array (
                'id' => 99,
                'name' => 'Материал',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:09:06',
                'updated_at' => '2024-08-22 13:09:07',
            ),
            96 =>
            array (
                'id' => 100,
                'name' => 'Количество экранированных модулей',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:09:52',
                'updated_at' => '2024-08-22 13:09:53',
            ),
            97 =>
            array (
                'id' => 101,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 8,
                'created_at' => '2024-08-22 13:10:33',
                'updated_at' => '2024-08-22 13:10:34',
            ),
            98 =>
            array (
                'id' => 102,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:11:20',
                'updated_at' => '2024-08-22 14:11:21',
            ),
            99 =>
            array (
                'id' => 103,
                'name' => 'Тип',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:11:41',
                'updated_at' => '2024-08-22 14:11:41',
            ),
            100 =>
            array (
                'id' => 104,
                'name' => 'Материал',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:12:05',
                'updated_at' => '2024-08-22 14:12:06',
            ),
            101 =>
            array (
                'id' => 106,
                'name' => 'Резьба под гермоввод',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:13:31',
                'updated_at' => '2024-08-22 14:13:32',
            ),
            102 =>
            array (
                'id' => 107,
                'name' => 'Элементы фиксации',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:13:58',
                'updated_at' => '2024-08-22 14:13:59',
            ),
            103 =>
            array (
                'id' => 108,
            'name' => 'Степень защиты IP (в сочлененном состоянии)',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:16:35',
                'updated_at' => '2024-08-22 14:16:36',
            ),
            104 =>
            array (
                'id' => 109,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:17:02',
                'updated_at' => '2024-08-22 14:17:02',
            ),
            105 =>
            array (
                'id' => 110,
                'name' => 'Количество отверстий для ввода кабеля',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 14:18:45',
                'updated_at' => '2024-08-22 14:18:46',
            ),
            106 =>
            array (
                'id' => 111,
                'name' => 'Вид',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 15:28:24',
                'updated_at' => '2024-08-22 15:28:25',
            ),
            107 =>
            array (
                'id' => 112,
                'name' => 'Конструкция',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 20,
                'created_at' => '2024-08-22 18:00:19',
                'updated_at' => '2024-08-22 18:00:20',
            ),
            108 =>
            array (
                'id' => 113,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:54:13',
                'updated_at' => '2024-08-22 21:54:14',
            ),
            109 =>
            array (
                'id' => 114,
                'name' => 'Тип',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:54:41',
                'updated_at' => '2024-08-22 21:54:42',
            ),
            110 =>
            array (
                'id' => 115,
                'name' => 'Вид',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:55:01',
                'updated_at' => '2024-08-22 21:55:02',
            ),
            111 =>
            array (
                'id' => 116,
                'name' => 'Конструкция',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:55:20',
                'updated_at' => '2024-08-22 21:55:21',
            ),
            112 =>
            array (
                'id' => 117,
                'name' => 'Материал корпуса',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:56:26',
                'updated_at' => '2024-08-22 21:56:27',
            ),
            113 =>
            array (
                'id' => 118,
                'name' => 'Материал крышки',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:57:36',
                'updated_at' => '2024-08-22 21:57:37',
            ),
            114 =>
            array (
                'id' => 119,
                'name' => 'Ввод кабеля',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:57:59',
                'updated_at' => '2024-08-22 21:58:00',
            ),
            115 =>
            array (
                'id' => 120,
                'name' => 'Количество отверстий для ввода кабеля',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:59:31',
                'updated_at' => '2024-08-22 21:59:32',
            ),
            116 =>
            array (
                'id' => 121,
                'name' => 'Резьба под гермоввод',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 21:59:56',
                'updated_at' => '2024-08-22 21:59:58',
            ),
            117 =>
            array (
                'id' => 122,
                'name' => 'Элементы фиксации',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 22:00:21',
                'updated_at' => '2024-08-22 22:00:22',
            ),
            118 =>
            array (
                'id' => 123,
            'name' => 'Степень защиты IP (в сочлененном состоянии или с закрытой крышкой)',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 22:01:21',
                'updated_at' => '2024-08-22 22:01:22',
            ),
            119 =>
            array (
                'id' => 124,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 21,
                'created_at' => '2024-08-22 22:01:48',
                'updated_at' => '2024-08-22 22:01:49',
            ),
            120 =>
            array (
                'id' => 125,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:44:26',
                'updated_at' => '2024-08-22 23:44:27',
            ),
            121 =>
            array (
                'id' => 126,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:45:20',
                'updated_at' => '2024-08-22 23:45:21',
            ),
            122 =>
            array (
                'id' => 127,
                'name' => 'Элементы фиксации',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:45:47',
                'updated_at' => '2024-08-22 23:45:48',
            ),
            123 =>
            array (
                'id' => 128,
                'name' => 'Тип крепления',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:46:27',
                'updated_at' => '2024-08-22 23:46:28',
            ),
            124 =>
            array (
                'id' => 129,
            'name' => 'Степень защиты IP (в сочлененном состоянии)',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:47:25',
                'updated_at' => '2024-08-22 23:47:26',
            ),
            125 =>
            array (
                'id' => 130,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 22,
                'created_at' => '2024-08-22 23:47:53',
                'updated_at' => '2024-08-22 23:47:54',
            ),
            126 =>
            array (
                'id' => 131,
                'name' => 'Типоразмер',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:37:06',
                'updated_at' => '2024-08-23 11:37:07',
            ),
            127 =>
            array (
                'id' => 132,
                'name' => 'Контактная вставка',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:37:38',
                'updated_at' => '2024-08-23 11:37:39',
            ),
            128 =>
            array (
                'id' => 133,
                'name' => 'Материал контактной вставки',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:38:18',
                'updated_at' => '2024-08-23 11:38:19',
            ),
            129 =>
            array (
                'id' => 134,
                'name' => 'Тип корпуса',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:40:09',
                'updated_at' => '2024-08-23 11:40:10',
            ),
            130 =>
            array (
                'id' => 135,
                'name' => 'Материал корпуса',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:40:28',
                'updated_at' => '2024-08-23 11:40:29',
            ),
            131 =>
            array (
                'id' => 136,
                'name' => 'Резьба под гермоввод',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:41:34',
                'updated_at' => '2024-08-23 11:41:35',
            ),
            132 =>
            array (
                'id' => 137,
                'name' => 'Элементы фиксации',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:42:19',
                'updated_at' => '2024-08-23 11:42:20',
            ),
            133 =>
            array (
                'id' => 138,
                'name' => 'Материал крышки',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 11:42:51',
                'updated_at' => '2024-08-23 11:42:52',
            ),
            134 =>
            array (
                'id' => 139,
            'name' => 'Степень защиты IP (в сочлененном состоянии)',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 12:48:25',
                'updated_at' => '2024-08-23 12:48:26',
            ),
            135 =>
            array (
                'id' => 140,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 44,
                'created_at' => '2024-08-23 12:48:57',
                'updated_at' => '2024-08-23 12:48:58',
            ),
            136 =>
            array (
                'id' => 141,
                'name' => 'Номинальный ток',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:22:22',
                'updated_at' => '2024-08-23 18:22:23',
            ),
            137 =>
            array (
                'id' => 142,
                'name' => 'Тип контакта',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:22:54',
                'updated_at' => '2024-08-23 18:22:55',
            ),
            138 =>
            array (
                'id' => 143,
                'name' => 'Материал контакта',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:23:23',
                'updated_at' => '2024-08-23 18:23:24',
            ),
            139 =>
            array (
                'id' => 144,
                'name' => 'Покрытие контакта',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:23:55',
                'updated_at' => '2024-08-23 18:23:56',
            ),
            140 =>
            array (
                'id' => 145,
                'name' => 'Сопротивление контакта',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:24:20',
                'updated_at' => '2024-08-23 18:24:20',
            ),
            141 =>
            array (
                'id' => 146,
                'name' => 'Поперечное сечение проводника',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:24:46',
                'updated_at' => '2024-08-23 18:24:48',
            ),
            142 =>
            array (
                'id' => 147,
                'name' => 'AWG',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:25:12',
                'updated_at' => '2024-08-23 18:25:13',
            ),
            143 =>
            array (
                'id' => 148,
                'name' => 'Длина снятия изоляции',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:25:44',
                'updated_at' => '2024-08-23 18:25:45',
            ),
            144 =>
            array (
                'id' => 149,
                'name' => 'Совместимые контактные вставки',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 33,
                'created_at' => '2024-08-23 18:26:32',
                'updated_at' => '2024-08-23 18:26:33',
            ),
            145 =>
            array (
                'id' => 150,
                'name' => 'Резьба',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 19:38:56',
                'updated_at' => '2024-08-23 19:38:57',
            ),
            146 =>
            array (
                'id' => 151,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 19:39:55',
                'updated_at' => '2024-08-23 19:39:56',
            ),
            147 =>
            array (
                'id' => 152,
                'name' => 'Материал уплотнителя',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 19:40:20',
                'updated_at' => '2024-08-23 19:40:21',
            ),
            148 =>
            array (
                'id' => 153,
            'name' => 'Степень защиты (IP)',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 20:08:32',
                'updated_at' => '2024-08-23 20:08:33',
            ),
            149 =>
            array (
                'id' => 154,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 20:09:55',
                'updated_at' => '2024-08-23 20:09:56',
            ),
            150 =>
            array (
                'id' => 155,
                'name' => 'Диаметр кабеля',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 20:10:32',
                'updated_at' => '2024-08-23 20:10:33',
            ),
            151 =>
            array (
                'id' => 156,
            'name' => 'Размер гайки (номер ключа)',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 20:11:00',
                'updated_at' => '2024-08-23 20:11:01',
            ),
            152 =>
            array (
                'id' => 157,
                'name' => 'Длина резьбы',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 6,
                'created_at' => '2024-08-23 20:11:29',
                'updated_at' => '2024-08-23 20:11:30',
            ),
            153 =>
            array (
                'id' => 158,
                'name' => 'Резьба',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:33:27',
                'updated_at' => '2024-08-23 20:33:28',
            ),
            154 =>
            array (
                'id' => 159,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:33:52',
                'updated_at' => '2024-08-23 20:33:53',
            ),
            155 =>
            array (
                'id' => 160,
                'name' => 'Цвет',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:34:07',
                'updated_at' => '2024-08-23 20:34:08',
            ),
            156 =>
            array (
                'id' => 161,
                'name' => 'Материал уплотнителя',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:34:40',
                'updated_at' => '2024-08-23 20:34:40',
            ),
            157 =>
            array (
                'id' => 162,
                'name' => 'Степень защиты',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:34:56',
                'updated_at' => '2024-08-23 20:34:57',
            ),
            158 =>
            array (
                'id' => 163,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:35:26',
                'updated_at' => '2024-08-23 20:35:27',
            ),
            159 =>
            array (
                'id' => 164,
                'name' => 'Диаметр кабеля',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:35:49',
                'updated_at' => '2024-08-23 20:35:50',
            ),
            160 =>
            array (
                'id' => 165,
            'name' => 'Размер гайки (номер ключа)',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:36:15',
                'updated_at' => '2024-08-23 20:36:16',
            ),
            161 =>
            array (
                'id' => 166,
                'name' => 'Длина резьбы',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 7,
                'created_at' => '2024-08-23 20:36:31',
                'updated_at' => '2024-08-23 20:36:32',
            ),
            162 =>
            array (
                'id' => 167,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 31,
                'created_at' => '2024-08-23 21:22:34',
                'updated_at' => '2024-08-23 21:22:35',
            ),
            163 =>
            array (
                'id' => 168,
                'name' => 'Диаметр металлорукава',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 31,
                'created_at' => '2024-08-23 21:23:02',
                'updated_at' => '2024-08-23 21:23:03',
            ),
            164 =>
            array (
                'id' => 169,
                'name' => 'Длина резьбы',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 31,
                'created_at' => '2024-08-23 21:23:34',
                'updated_at' => '2024-08-23 21:23:35',
            ),
            165 =>
            array (
                'id' => 170,
                'name' => 'Внешний диаметр',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 31,
                'created_at' => '2024-08-23 21:24:12',
                'updated_at' => '2024-08-23 21:24:13',
            ),
            166 =>
            array (
                'id' => 171,
                'name' => 'Общая длина',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 31,
                'created_at' => '2024-08-23 21:24:58',
                'updated_at' => '2024-08-23 21:24:59',
            ),
            167 =>
            array (
                'id' => 172,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:49:57',
                'updated_at' => '2024-08-23 21:49:59',
            ),
            168 =>
            array (
                'id' => 173,
                'name' => 'Тип резьбы',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:50:21',
                'updated_at' => '2024-08-23 21:50:21',
            ),
            169 =>
            array (
                'id' => 174,
                'name' => 'Диаметр металлорукава',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:50:52',
                'updated_at' => '2024-08-23 21:50:53',
            ),
            170 =>
            array (
                'id' => 175,
                'name' => 'Длина резьбы',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:51:11',
                'updated_at' => '2024-08-23 21:51:12',
            ),
            171 =>
            array (
                'id' => 176,
                'name' => 'Внешний диаметр',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:51:32',
                'updated_at' => '2024-08-23 21:51:33',
            ),
            172 =>
            array (
                'id' => 177,
                'name' => 'Общая длина',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:51:55',
                'updated_at' => '2024-08-23 21:51:56',
            ),
            173 =>
            array (
                'id' => 178,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 32,
                'created_at' => '2024-08-23 21:52:33',
                'updated_at' => '2024-08-23 21:52:33',
            ),
            174 =>
            array (
                'id' => 179,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:13:22',
                'updated_at' => '2024-08-23 22:13:23',
            ),
            175 =>
            array (
                'id' => 180,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:13:52',
                'updated_at' => '2024-08-23 22:13:53',
            ),
            176 =>
            array (
                'id' => 181,
                'name' => 'Материал уплотнителя',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:14:12',
                'updated_at' => '2024-08-23 22:14:13',
            ),
            177 =>
            array (
                'id' => 182,
                'name' => 'Степень защиты',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:14:38',
                'updated_at' => '2024-08-23 22:14:39',
            ),
            178 =>
            array (
                'id' => 183,
            'name' => 'Диаметр кабеля (Ø)',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:14:59',
                'updated_at' => '2024-08-23 22:15:00',
            ),
            179 =>
            array (
                'id' => 184,
                'name' => 'Диаметр резьбы',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:15:45',
                'updated_at' => '2024-08-23 22:15:46',
            ),
            180 =>
            array (
                'id' => 185,
                'name' => 'Размер ключа',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:16:12',
                'updated_at' => '2024-08-23 22:16:13',
            ),
            181 =>
            array (
                'id' => 186,
                'name' => 'Длина резьбы',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 4,
                'created_at' => '2024-08-23 22:16:31',
                'updated_at' => '2024-08-23 22:16:33',
            ),
            182 =>
            array (
                'id' => 187,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:42:08',
                'updated_at' => '2024-08-23 22:42:09',
            ),
            183 =>
            array (
                'id' => 188,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:42:35',
                'updated_at' => '2024-08-23 22:42:36',
            ),
            184 =>
            array (
                'id' => 189,
                'name' => 'Материал уплотнителя',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:42:57',
                'updated_at' => '2024-08-23 22:42:58',
            ),
            185 =>
            array (
                'id' => 190,
                'name' => 'Степень защиты',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:43:22',
                'updated_at' => '2024-08-23 22:43:23',
            ),
            186 =>
            array (
                'id' => 191,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:43:54',
                'updated_at' => '2024-08-23 22:43:55',
            ),
            187 =>
            array (
                'id' => 192,
            'name' => 'Диаметр кабеля (Ø)',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:44:12',
                'updated_at' => '2024-08-23 22:44:13',
            ),
            188 =>
            array (
                'id' => 193,
                'name' => 'Диаметр резьбы',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:44:29',
                'updated_at' => '2024-08-23 22:44:30',
            ),
            189 =>
            array (
                'id' => 194,
                'name' => 'Размер ключа',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:44:48',
                'updated_at' => '2024-08-23 22:44:49',
            ),
            190 =>
            array (
                'id' => 195,
                'name' => 'Длина резьбы',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 5,
                'created_at' => '2024-08-23 22:45:04',
                'updated_at' => '2024-08-23 22:45:05',
            ),
            191 =>
            array (
                'id' => 196,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:05:37',
                'updated_at' => '2024-08-23 23:05:38',
            ),
            192 =>
            array (
                'id' => 197,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:06:20',
                'updated_at' => '2024-08-23 23:06:20',
            ),
            193 =>
            array (
                'id' => 198,
                'name' => 'Материал уплотнителя',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:06:40',
                'updated_at' => '2024-08-23 23:06:40',
            ),
            194 =>
            array (
                'id' => 199,
                'name' => 'Степень защиты',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:07:02',
                'updated_at' => '2024-08-23 23:07:03',
            ),
            195 =>
            array (
                'id' => 200,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:07:20',
                'updated_at' => '2024-08-23 23:07:21',
            ),
            196 =>
            array (
                'id' => 201,
            'name' => 'Количество и диаметр вводимых кабелей (nxd)',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:07:39',
                'updated_at' => '2024-08-23 23:07:40',
            ),
            197 =>
            array (
                'id' => 202,
                'name' => 'Диаметр резьбы',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:07:58',
                'updated_at' => '2024-08-23 23:07:59',
            ),
            198 =>
            array (
                'id' => 203,
                'name' => 'Размер ключа',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:08:15',
                'updated_at' => '2024-08-23 23:08:16',
            ),
            199 =>
            array (
                'id' => 204,
                'name' => 'Длина резьбы',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 3,
                'created_at' => '2024-08-23 23:08:31',
                'updated_at' => '2024-08-23 23:08:32',
            ),
            200 =>
            array (
                'id' => 205,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:44:46',
                'updated_at' => '2024-08-26 11:44:47',
            ),
            201 =>
            array (
                'id' => 206,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:45:08',
                'updated_at' => '2024-08-26 11:45:09',
            ),
            202 =>
            array (
                'id' => 207,
                'name' => 'Цвет',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:45:25',
                'updated_at' => '2024-08-26 11:45:25',
            ),
            203 =>
            array (
                'id' => 208,
                'name' => 'Степень защиты IP',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:45:43',
                'updated_at' => '2024-08-26 11:45:44',
            ),
            204 =>
            array (
                'id' => 209,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:46:06',
                'updated_at' => '2024-08-26 11:46:07',
            ),
            205 =>
            array (
                'id' => 210,
                'name' => 'Длина резьбы',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:46:26',
                'updated_at' => '2024-08-26 11:46:27',
            ),
            206 =>
            array (
                'id' => 211,
                'name' => 'Высота',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:46:46',
                'updated_at' => '2024-08-26 11:46:47',
            ),
            207 =>
            array (
                'id' => 212,
                'name' => 'Диаметр резьбы',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:47:02',
                'updated_at' => '2024-08-26 11:47:03',
            ),
            208 =>
            array (
                'id' => 213,
                'name' => 'Внешний диаметр',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 10,
                'created_at' => '2024-08-26 11:47:24',
                'updated_at' => '2024-08-26 11:47:25',
            ),
            209 =>
            array (
                'id' => 214,
                'name' => 'Тип резьбы',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:31:26',
                'updated_at' => '2024-08-26 12:31:27',
            ),
            210 =>
            array (
                'id' => 215,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:31:48',
                'updated_at' => '2024-08-26 12:31:48',
            ),
            211 =>
            array (
                'id' => 216,
                'name' => 'Цвет',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:32:01',
                'updated_at' => '2024-08-26 12:32:02',
            ),
            212 =>
            array (
                'id' => 217,
                'name' => 'Степень защиты IP',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:32:25',
                'updated_at' => '2024-08-26 12:32:25',
            ),
            213 =>
            array (
                'id' => 218,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:32:45',
                'updated_at' => '2024-08-26 12:32:46',
            ),
            214 =>
            array (
                'id' => 219,
                'name' => 'Длина резьбы',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:33:04',
                'updated_at' => '2024-08-26 12:33:05',
            ),
            215 =>
            array (
                'id' => 220,
                'name' => 'Высота',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:33:26',
                'updated_at' => '2024-08-26 12:33:26',
            ),
            216 =>
            array (
                'id' => 221,
                'name' => 'Диаметр резьбы',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:33:46',
                'updated_at' => '2024-08-26 12:33:47',
            ),
            217 =>
            array (
                'id' => 222,
                'name' => 'Размер ключа',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 9,
                'created_at' => '2024-08-26 12:34:04',
                'updated_at' => '2024-08-26 12:34:04',
            ),
            218 =>
            array (
                'id' => 223,
                'name' => 'Наружная резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:01:46',
                'updated_at' => '2024-08-26 13:01:47',
            ),
            219 =>
            array (
                'id' => 224,
                'name' => 'Внутренняя резьба',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:02:12',
                'updated_at' => '2024-08-26 13:02:13',
            ),
            220 =>
            array (
                'id' => 225,
                'name' => 'Длина наружной резьбы',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:02:37',
                'updated_at' => '2024-08-26 13:02:38',
            ),
            221 =>
            array (
                'id' => 226,
                'name' => 'Длина внутренней резьбы',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:03:02',
                'updated_at' => '2024-08-26 13:03:03',
            ),
            222 =>
            array (
                'id' => 227,
                'name' => 'Размер ключа',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:03:24',
                'updated_at' => '2024-08-26 13:03:25',
            ),
            223 =>
            array (
                'id' => 228,
                'name' => 'Материал',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:03:43',
                'updated_at' => '2024-08-26 13:03:44',
            ),
            224 =>
            array (
                'id' => 229,
                'name' => 'Цвет',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:04:05',
                'updated_at' => '2024-08-26 13:04:06',
            ),
            225 =>
            array (
                'id' => 230,
                'name' => 'Тип',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 35,
                'created_at' => '2024-08-26 13:05:31',
                'updated_at' => '2024-08-26 13:05:32',
            ),
            226 =>
            array (
                'id' => 231,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:42:54',
                'updated_at' => '2024-08-26 13:42:54',
            ),
            227 =>
            array (
                'id' => 232,
                'name' => 'Цвет',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:43:19',
                'updated_at' => '2024-08-26 13:43:20',
            ),
            228 =>
            array (
                'id' => 233,
                'name' => 'Наружная резьба',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:43:39',
                'updated_at' => '2024-08-26 13:43:40',
            ),
            229 =>
            array (
                'id' => 234,
                'name' => 'Внутренняя резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:43:59',
                'updated_at' => '2024-08-26 13:44:00',
            ),
            230 =>
            array (
                'id' => 235,
                'name' => 'Длина наружной резьбы',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:44:17',
                'updated_at' => '2024-08-26 13:44:18',
            ),
            231 =>
            array (
                'id' => 236,
                'name' => 'Общая длина',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:44:41',
                'updated_at' => '2024-08-26 13:44:41',
            ),
            232 =>
            array (
                'id' => 237,
                'name' => 'Размер ключа',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:45:00',
                'updated_at' => '2024-08-26 13:45:01',
            ),
            233 =>
            array (
                'id' => 238,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 36,
                'created_at' => '2024-08-26 13:45:21',
                'updated_at' => '2024-08-26 13:45:22',
            ),
            234 =>
            array (
                'id' => 239,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:27:18',
                'updated_at' => '2024-08-26 14:27:19',
            ),
            235 =>
            array (
                'id' => 240,
                'name' => 'Цвет',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:27:32',
                'updated_at' => '2024-08-26 14:27:33',
            ),
            236 =>
            array (
                'id' => 241,
                'name' => 'Наружная резьба',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:27:58',
                'updated_at' => '2024-08-26 14:27:59',
            ),
            237 =>
            array (
                'id' => 242,
                'name' => 'Длина наружной резьбы',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:28:21',
                'updated_at' => '2024-08-26 14:28:22',
            ),
            238 =>
            array (
                'id' => 243,
                'name' => 'Общая длина',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:28:42',
                'updated_at' => '2024-08-26 14:28:43',
            ),
            239 =>
            array (
                'id' => 244,
                'name' => 'Размер ключа',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:28:58',
                'updated_at' => '2024-08-26 14:28:59',
            ),
            240 =>
            array (
                'id' => 245,
                'name' => 'Внутрення резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 40,
                'created_at' => '2024-08-26 14:36:41',
                'updated_at' => '2024-08-26 14:36:42',
            ),
            241 =>
            array (
                'id' => 246,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:44:49',
                'updated_at' => '2024-08-26 14:44:50',
            ),
            242 =>
            array (
                'id' => 247,
                'name' => 'Цвет',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:45:08',
                'updated_at' => '2024-08-26 14:45:09',
            ),
            243 =>
            array (
                'id' => 248,
                'name' => 'Наружная резьба',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:45:27',
                'updated_at' => '2024-08-26 14:45:28',
            ),
            244 =>
            array (
                'id' => 249,
                'name' => 'Внутренняя резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:45:49',
                'updated_at' => '2024-08-26 14:45:50',
            ),
            245 =>
            array (
                'id' => 250,
                'name' => 'Длина наружной резьбы',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:46:07',
                'updated_at' => '2024-08-26 14:46:08',
            ),
            246 =>
            array (
                'id' => 251,
                'name' => 'Общая длина',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:46:22',
                'updated_at' => '2024-08-26 14:46:23',
            ),
            247 =>
            array (
                'id' => 252,
                'name' => 'Размер ключа',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:46:40',
                'updated_at' => '2024-08-26 14:46:41',
            ),
            248 =>
            array (
                'id' => 253,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 41,
                'created_at' => '2024-08-26 14:46:59',
                'updated_at' => '2024-08-26 14:47:00',
            ),
            249 =>
            array (
                'id' => 254,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:57:27',
                'updated_at' => '2024-08-26 14:57:29',
            ),
            250 =>
            array (
                'id' => 255,
                'name' => 'Цвет',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:57:47',
                'updated_at' => '2024-08-26 14:57:48',
            ),
            251 =>
            array (
                'id' => 256,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:58:01',
                'updated_at' => '2024-08-26 14:58:02',
            ),
            252 =>
            array (
                'id' => 257,
                'name' => 'Резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:58:23',
                'updated_at' => '2024-08-26 14:58:24',
            ),
            253 =>
            array (
                'id' => 258,
                'name' => 'Толщина',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:58:38',
                'updated_at' => '2024-08-26 14:58:39',
            ),
            254 =>
            array (
                'id' => 259,
                'name' => 'Размер ключа',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 18,
                'created_at' => '2024-08-26 14:58:58',
                'updated_at' => '2024-08-26 14:58:59',
            ),
            255 =>
            array (
                'id' => 260,
                'name' => 'Материал',
                'order_column' => 1,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:07:16',
                'updated_at' => '2024-08-26 15:07:17',
            ),
            256 =>
            array (
                'id' => 261,
                'name' => 'Цвет',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:07:32',
                'updated_at' => '2024-08-26 15:07:33',
            ),
            257 =>
            array (
                'id' => 262,
                'name' => 'Диапазон рабочих температур',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:07:56',
                'updated_at' => '2024-08-26 15:07:57',
            ),
            258 =>
            array (
                'id' => 263,
                'name' => 'Резьба',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:08:16',
                'updated_at' => '2024-08-26 15:08:17',
            ),
            259 =>
            array (
                'id' => 264,
                'name' => 'Толщина',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:08:31',
                'updated_at' => '2024-08-26 15:08:32',
            ),
            260 =>
            array (
                'id' => 265,
                'name' => 'Размер ключа',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 19,
                'created_at' => '2024-08-26 15:08:53',
                'updated_at' => '2024-08-26 15:08:54',
            ),
            261 =>
            array (
                'id' => 266,
                'name' => 'Типоразмер корпуса',
                'order_column' => 15,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-08-28 23:06:32',
                'updated_at' => '2024-08-28 23:06:33',
            ),
            262 =>
            array (
                'id' => 267,
                'name' => 'Вид корпуса',
                'order_column' => 17,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-08-28 23:07:24',
                'updated_at' => '2024-08-28 23:07:24',
            ),
            263 =>
            array (
                'id' => 268,
                'name' => 'Конструкция',
                'order_column' => 19,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-08-28 23:07:46',
                'updated_at' => '2024-08-28 23:07:47',
            ),
            264 =>
            array (
                'id' => 269,
                'name' => 'Назначение',
                'order_column' => 18,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-09-02 10:07:36',
                'updated_at' => '2024-09-02 10:07:37',
            ),
            265 =>
            array (
                'id' => 270,
                'name' => 'Материал крышки',
                'order_column' => 21,
                'section' => 0,
                'product_type_id' => 39,
                'created_at' => '2024-09-02 12:48:05',
                'updated_at' => '2024-09-02 12:48:05',
            ),
            266 =>
            array (
                'id' => 271,
                'name' => 'Характеристики контактных вставок',
                'order_column' => 1,
                'section' => 1,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:41:59',
                'updated_at' => '2024-09-02 20:42:00',
            ),
            267 =>
            array (
                'id' => 272,
                'name' => 'Типоразмер',
                'order_column' =>2,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:43:08',
                'updated_at' => '2024-09-02 20:43:09',
            ),
            268 =>
            array (
                'id' => 273,
                'name' => 'Тип',
                'order_column' =>3,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:43:46',
                'updated_at' => '2024-09-02 20:43:46',
            ),
            269 =>
            array (
                'id' => 274,
                'name' => 'Материал контактных вставок',
                'order_column' =>4,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:44:00',
                'updated_at' => '2024-09-02 20:44:01',
            ),
            270 =>
            array (
                'id' => 275,
                'name' => 'Материал контактов',
                'order_column' =>5,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:44:22',
                'updated_at' => '2024-09-02 20:44:22',
            ),
            271 =>
            array (
                'id' => 276,
                'name' => 'Покрытие контактов',
                'order_column' =>6,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:44:43',
                'updated_at' => '2024-09-02 20:44:44',
            ),
            272 =>
            array (
                'id' => 277,
                'name' => 'Количество контактов',
                'order_column' => 7,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:45:00',
                'updated_at' => '2024-09-02 20:45:01',
            ),
            273 =>
            array (
                'id' => 278,
                'name' => 'Номинальный ток',
                'order_column' => 8,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:45:17',
                'updated_at' => '2024-09-02 20:45:18',
            ),
            274 =>
            array (
                'id' => 279,
                'name' => 'Номинальное напряжение',
                'order_column' => 9,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:45:34',
                'updated_at' => '2024-09-02 20:45:35',
            ),
            275 =>
            array (
                'id' => 280,
                'name' => 'Диапазон рабочих температур',
                'order_column' => 10,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:45:53',
                'updated_at' => '2024-09-02 20:45:54',
            ),
            276 =>
            array (
                'id' => 281,
                'name' => 'Присоединение проводников',
                'order_column' => 11,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:46:14',
                'updated_at' => '2024-09-02 20:46:15',
            ),
            277 =>
            array (
                'id' => 282,
                'name' => 'Поперечное сечение проводников',
                'order_column' => 12,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:46:34',
                'updated_at' => '2024-09-02 20:46:35',
            ),
            278 =>
            array (
                'id' => 283,
                'name' => 'Характеристики корпусов',
                'order_column' => 13,
                'section' => 1,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:47:03',
                'updated_at' => '2024-09-02 20:47:03',
            ),
            279 =>
            array (
                'id' => 284,
                'name' => 'Типоразмер',
                'order_column' => 14,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:47:38',
                'updated_at' => '2024-09-02 20:47:39',
            ),
            280 =>
            array (
                'id' => 285,
                'name' => 'Материал корпусов',
                'order_column' => 15,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:48:01',
                'updated_at' => '2024-09-02 20:48:02',
            ),
            281 =>
            array (
                'id' => 286,
                'name' => 'Элементы фиксации',
                'order_column' => 17,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:48:35',
                'updated_at' => '2024-09-02 20:48:36',
            ),
            282 =>
            array (
                'id' => 287,
            'name' => 'Степень защиты (IP)',
                'order_column' => 20,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:49:00',
                'updated_at' => '2024-09-02 20:49:01',
            ),
            283 =>
            array (
                'id' => 288,
                'name' => 'Характеристики гермоввода/гермовводов',
                'order_column' => 21,
                'section' => 1,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:50:40',
                'updated_at' => '2024-09-02 20:50:41',
            ),
            284 =>
            array (
                'id' => 289,
                'name' => 'Количество отверстий для ввода кабеля',
                'order_column' => 18,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:53:24',
                'updated_at' => '2024-09-02 20:53:24',
            ),
            285 =>
            array (
                'id' => 290,
                'name' => 'Резьба под гермоввод/гермовводы',
                'order_column' => 19,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:54:28',
                'updated_at' => '2024-09-02 20:54:29',
            ),
            286 =>
            array (
                'id' => 291,
                'name' => 'Материал',
                'order_column' => 22,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:55:55',
                'updated_at' => '2024-09-02 20:55:55',
            ),
            287 =>
            array (
                'id' => 292,
                'name' => 'Материал уплотнения',
                'order_column' => 23,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:58:03',
                'updated_at' => '2024-09-02 20:58:04',
            ),
            288 =>
            array (
                'id' => 293,
                'name' => 'Тип резьбы',
                'order_column' => 24,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:58:28',
                'updated_at' => '2024-09-02 20:58:29',
            ),
            289 =>
            array (
                'id' => 294,
                'name' => 'Диапазон кабелей',
                'order_column' => 25,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:58:56',
                'updated_at' => '2024-09-02 20:58:57',
            ),
            290 =>
            array (
                'id' => 295,
            'name' => 'Размер гайки (номер ключа)',
                'order_column' => 26,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 20:59:38',
                'updated_at' => '2024-09-02 20:59:39',
            ),
            291 =>
            array (
                'id' => 296,
                'name' => 'Длина резьбы',
                'order_column' => 27,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 21:00:52',
                'updated_at' => '2024-09-02 21:00:53',
            ),
            292 =>
            array (
                'id' => 297,
                'name' => 'Степень защиты от влаги и пыли',
                'order_column' => 28,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 21:01:16',
                'updated_at' => '2024-09-02 21:01:17',
            ),
            293 =>
            array (
                'id' => 298,
                'name' => 'Температура эксплуатации',
                'order_column' => 29,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 21:01:38',
                'updated_at' => '2024-09-02 21:01:39',
            ),
            294 =>
            array (
                'id' => 299,
                'name' => 'Специальные свойства',
                'order_column' => 30,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 21:01:57',
                'updated_at' => '2024-09-02 21:01:58',
            ),
            295 =>
            array (
                'id' => 300,
                'name' => 'Цвет',
                'order_column' => 31,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-02 21:02:15',
                'updated_at' => '2024-09-02 21:02:16',
            ),
            296 =>
            array (
                'id' => 301,
                'name' => 'Материал крышки',
                'order_column' => 16,
                'section' => 0,
                'product_type_id' => 38,
                'created_at' => '2024-09-03 12:54:36',
                'updated_at' => '2024-09-03 12:54:37',
            ),
        ));


    }
}
