<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);

    }
}

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'id' => '1',
            'name' => 'Maks',
            'email' => 'Maksymiv.yura@gmail.com',
            'password' => '$2y$10$u98LVmqqB82kqbnacndX6ucg83echNt48tZMe44sjIEiGZQqtgh3i',
            'slug' => 'inspiga',
            'country' => 'Ukraine',
            'city' => 'Lviv',
            'verified' => '1',
            'status' => 'active',
            'email_verified_at' => '2021-12-18 13:19:30',
            'created_at' => '2021-12-18 13:19:30',
            'updated_at' => '2021-12-18 13:19:30',
        ]);
        User::create([
            'id' => '2',
            'name' => 'Happy Krislo99',
            'email' => 'happy.krislo@gmail.com',
            'password' => '$2y$10$u98LVmqqB82kqbnacndX6ucg83echNt48tZMe44sjIEiGZQqtgh3i',
            'slug' => 'happy_krislo',
            'country' => 'Ukraine',
            'city' => 'Kyiv',
            'image' => '/images/account/2/logo.jpg',
            'phone' => '0682855009',
            'instagram' => 'happy_krislo',
            'verified' => '1',
            'status' => 'active',
            'email_verified_at' => '2021-12-18 13:19:30',
            'created_at' => '2021-12-18 13:19:30',
            'updated_at' => '2021-12-18 13:19:30',
        ]);

    }
}

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        Category::create([
            'id' => '1',
            'parent_id' => '0',
            'slug' => 'crypto',
            'en' => 'Crypto',
            'ru' => 'Крипто',
            'uk' => ' Крипто',
            'published' => '1',
            'sort' => '1',
        ]);
    }
}

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->delete();
        Country::create([
            'id' => '1',
            'slug' => 'ukraine',
            'en' => 'Ukraine',
            'ru' => 'Украина',
            'uk' => ' Україна',
            'sort' => '0',
        ]);
    }
}

class StateSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->delete();
        State::create([
            'id' => '1',
            'slug' => 'ar-crimea',
            'en' => 'Crimea',
            'ru' => 'АР Крым',
            'uk' => 'АР Крим',
            'country_id' => '1',
            'sort' => '0',
        ]);
        State::create([
            'id' => '2',
            'slug' => 'vinnitsa-region',
            'en' => 'Vinnytsia region',
            'ru' => 'Винницкая область',
            'uk' => 'Вінницька область',
            'country_id' => '1',
            'sort' => '1',
        ]);
        State::create([
            'id' => '3',
            'slug' => 'volyn-region',
            'en' => 'Volyn region',
            'ru' => 'Волынская область',
            'uk' => 'Волинська область',
            'country_id' => '1',
            'sort' => '2',
        ]);
        State::create([
            'id' => '4',
            'slug' => 'dnepropetrovsk-region',
            'en' => 'Dnipropetrovsk region',
            'ru' => 'Днепропетровская область',
            'uk' => 'Дніпропетровська область',
            'country_id' => '1',
            'sort' => '3',
        ]);
        State::create([
            'id' => '5',
            'slug' => 'donetsk-region',
            'en' => 'Donetsk region',
            'ru' => 'Донецкая область',
            'uk' => 'Донецька область',
            'country_id' => '1',
            'sort' => '4',
        ]);
        State::create([
            'id' => '6',
            'slug' => 'zhytomyr-region',
            'en' => 'Zhytomyr region',
            'ru' => 'Житомирская область',
            'uk' => 'Житомирська область',
            'country_id' => '1',
            'sort' => '5',
        ]);
        State::create([
            'id' => '7',
            'slug' => 'zakarpattia-region',
            'en' => 'Zakarpattia region',
            'ru' => 'Закарпатская область',
            'uk' => 'Закарпатська область',
            'country_id' => '1',
            'sort' => '6',
        ]);
        State::create([
            'id' => '8',
            'slug' => 'zaporizhzhia-region',
            'en' => 'Zaporizhzhia region',
            'ru' => 'Запорожская область',
            'uk' => 'Запорізька область',
            'country_id' => '1',
            'sort' => '7',
        ]);
        State::create([
            'id' => '9',
            'slug' => 'ivano-frankivsk-region',
            'en' => 'Ivano-Frankivsk region',
            'ru' => 'Ивано-Франковская область',
            'uk' => 'Івано-Франківська область',
            'country_id' => '1',
            'sort' => '8',
        ]);
        State::create([
            'id' => '10',
            'slug' => 'kyiv-region',
            'en' => 'Kyiv region',
            'ru' => 'Киевская область',
            'uk' => 'Київська область',
            'country_id' => '1',
            'sort' => '9',
        ]);
        State::create([
            'id' => '11',
            'slug' => 'kirovograd-region',
            'en' => 'Kirovograd region',
            'ru' => 'Кировоградская область',
            'uk' => 'Кіровоградська область',
            'country_id' => '1',
            'sort' => '10',
        ]);
        State::create([
            'id' => '12',
            'slug' => 'luhansk-region',
            'en' => 'Luhansk region',
            'ru' => 'Луганская область',
            'uk' => 'Луганська область',
            'country_id' => '1',
            'sort' => '12',
        ]);
        State::create([
            'id' => '13',
            'slug' => 'lviv-region',
            'en' => 'Lviv region',
            'ru' => 'Львовская область',
            'uk' => 'Львівська область',
            'country_id' => '1',
            'sort' => '13',
        ]);
        State::create([
            'id' => '14',
            'slug' => 'mykolaiv-region',
            'en' => 'Mykolaiv region',
            'ru' => 'Николаевская область',
            'uk' => 'Миколаївська область',
            'country_id' => '1',
            'sort' => '14',
        ]);
        State::create([
            'id' => '15',
            'slug' => 'odessa-region',
            'en' => 'Odessa region',
            'ru' => 'Одесская область',
            'uk' => 'Одеська область',
            'country_id' => '1',
            'sort' => '15',
        ]);
        State::create([
            'id' => '16',
            'slug' => 'poltava-region',
            'en' => 'Poltava region',
            'ru' => 'Полтавская область',
            'uk' => 'Полтавська область',
            'country_id' => '1',
            'sort' => '16',
        ]);
        State::create([
            'id' => '17',
            'slug' => 'rivne-region',
            'en' => 'Rivne region',
            'ru' => 'Ровенская область',
            'uk' => 'Рівненська область',
            'country_id' => '1',
            'sort' => '17',
        ]);
        State::create([
            'id' => '18',
            'slug' => 'sumy-region',
            'en' => 'Sumy region',
            'ru' => 'Сумская область',
            'uk' => 'Сумська область',
            'country_id' => '1',
            'sort' => '18',
        ]);
        State::create([
            'id' => '19',
            'slug' => 'ternopil-region',
            'en' => 'Ternopil region',
            'ru' => 'Тернопольская область',
            'uk' => 'Тернопільська область',
            'country_id' => '1',
            'sort' => '19',
        ]);
        State::create([
            'id' => '20',
            'slug' => 'kharkiv-region',
            'en' => 'Kharkiv region',
            'ru' => 'Харьковская область',
            'uk' => 'Харківська область',
            'country_id' => '1',
            'sort' => '20',
        ]);
        State::create([
            'id' => '21',
            'slug' => 'kherson-region',
            'en' => 'Kherson region',
            'ru' => 'Херсонская область',
            'uk' => 'Херсонська область',
            'country_id' => '1',
            'sort' => '21',
        ]);
        State::create([
            'id' => '22',
            'slug' => 'khmelnitsky-region',
            'en' => 'Khmelnytsky region',
            'ru' => 'Хмельницкая область',
            'uk' => 'Хмельницька область',
            'country_id' => '1',
            'sort' => '22',
        ]);
        State::create([
            'id' => '23',
            'slug' => 'cherkasy-region',
            'en' => 'Cherkasy region',
            'ru' => 'Черкасская область',
            'uk' => 'Черкаська область',
            'country_id' => '1',
            'sort' => '23',
        ]);
        State::create([
            'id' => '24',
            'slug' => 'chernihiv-region',
            'en' => 'Chernihiv region',
            'ru' => 'Черниговская область',
            'uk' => 'Чернігівська область',
            'country_id' => '1',
            'sort' => '24',
        ]);
        State::create([
            'id' => '25',
            'slug' => 'chernivtsi-region',
            'en' => 'Chernivtsi region',
            'ru' => 'Черновицкая область',
            'uk' => 'Чернівецька область',
            'country_id' => '1',
            'sort' => '25',
        ]);
    }
}
class CitySeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->delete();
        City::create([
            'id' => '1',
            'slug' => 'simferopol',
            'en' => 'Simferopol',
            'ru' => 'Симферополь',
            'uk' => 'Сімферополь',
            'country_id' => '1',
            'state_id' => '1',
            'sort' => '1',
        ]);
        City::create([
            'id' => '2',
            'slug' => 'vinnitsa',
            'en' => 'Vinnitsa',
            'ru' => 'Винница',
            'uk' => 'Вінниця',
            'country_id' => '1',
            'state_id' => '2',
            'sort' => '1',
        ]);
        City::create([
            'id' => '3',
            'slug' => 'lutsk',
            'en' => 'Lutsk',
            'ru' => 'Луцк',
            'uk' => 'Луцьк',
            'country_id' => '1',
            'state_id' => '3',
            'sort' => '1',
        ]);
        City::create([
            'id' => '4',
            'slug' => 'dnepropetrovsk',
            'en' => 'Dnepropetrovsk',
            'ru' => 'Днепропетровск',
            'uk' => 'Дніпропетровськ',
            'country_id' => '1',
            'state_id' => '4',
            'sort' => '1',
        ]);
        City::create([
            'id' => '5',
            'slug' => 'donetsk',
            'en' => 'Donetsk',
            'ru' => 'Донецк',
            'uk' => 'Донецьк',
            'country_id' => '1',
            'state_id' => '5',
            'sort' => '1',
        ]);
        City::create([
            'id' => '6',
            'slug' => 'zhytomyr',
            'en' => 'Zhytomyr',
            'ru' => 'Житомир',
            'uk' => 'Житомир',
            'country_id' => '1',
            'state_id' => '6',
            'sort' => '1',
        ]);
        City::create([
            'id' => '7',
            'slug' => 'uzhhorod',
            'en' => 'Uzhhorod',
            'ru' => 'Ужгород',
            'uk' => 'Ужгород',
            'country_id' => '1',
            'state_id' => '7',
            'sort' => '1',
        ]);
        City::create([
            'id' => '8',
            'slug' => 'zaporizhzhia',
            'en' => 'Zaporizhzhia',
            'ru' => 'Запоріжжя',
            'uk' => 'Запоріжжя',
            'country_id' => '1',
            'state_id' => '8',
            'sort' => '1',
        ]);
        City::create([
            'id' => '9',
            'slug' => 'ivano-frankivsk',
            'en' => 'Ivano-Frankivsk',
            'ru' => 'Ивано-Франковск',
            'uk' => 'Івано-Франківськ',
            'country_id' => '1',
            'state_id' => '9',
            'sort' => '1',
        ]);
        City::create([
            'id' => '10',
            'slug' => 'kyiv',
            'en' => 'Kyiv',
            'ru' => 'Киев',
            'uk' => 'Київ',
            'country_id' => '1',
            'state_id' => '10',
            'sort' => '1',
        ]);
        City::create([
            'id' => '11',
            'slug' => 'kropyvnytskyi',
            'en' => 'Kropyvnytskyi',
            'ru' => 'Кропивницкий',
            'uk' => 'Кропивницький',
            'country_id' => '1',
            'state_id' => '11',
            'sort' => '1',
        ]);
        City::create([
            'id' => '12',
            'slug' => 'lugansk',
            'en' => 'Lugansk',
            'ru' => 'Луганск',
            'uk' => 'Луганськ',
            'country_id' => '1',
            'state_id' => '12',
            'sort' => '1',
        ]);
        City::create([
            'id' => '13',
            'slug' => 'lviv',
            'en' => 'Lviv',
            'ru' => 'Львов',
            'uk' => 'Львів',
            'country_id' => '1',
            'state_id' => '13',
            'sort' => '1',
        ]);
        City::create([
            'id' => '14',
            'slug' => 'mykolayiv',
            'en' => 'Mykolaiv',
            'ru' => 'Николаев',
            'uk' => 'Миколаїв',
            'country_id' => '1',
            'state_id' => '14',
            'sort' => '1',
        ]);
        City::create([
            'id' => '15',
            'slug' => 'odessa',
            'en' => 'Odessa',
            'ru' => 'Одесса',
            'uk' => 'Одеса',
            'country_id' => '1',
            'state_id' => '15',
            'sort' => '1',
        ]);
        City::create([
            'id' => '16',
            'slug' => 'poltava',
            'en' => 'Poltava',
            'ru' => 'Полтава',
            'uk' => 'Полтава',
            'country_id' => '1',
            'state_id' => '16',
            'sort' => '1',
        ]);
        City::create([
            'id' => '17',
            'slug' => 'rivne',
            'en' => 'Rivne',
            'ru' => 'Ровно',
            'uk' => 'Рівне',
            'country_id' => '1',
            'state_id' => '17',
            'sort' => '1',
        ]);
        City::create([
            'id' => '18',
            'slug' => 'sumy',
            'en' => 'Sumy',
            'ru' => 'Сумы',
            'uk' => 'Суми',
            'country_id' => '1',
            'state_id' => '18',
            'sort' => '1',
        ]);
        City::create([
            'id' => '19',
            'slug' => 'ternopil',
            'en' => 'Ternopil',
            'ru' => 'Тернополь',
            'uk' => 'Тернопіль',
            'country_id' => '1',
            'state_id' => '19',
            'sort' => '1',
        ]);
        City::create([
            'id' => '20',
            'slug' => 'kharkiv',
            'en' => 'Kharkiv',
            'ru' => 'Харьков',
            'uk' => 'Харків',
            'country_id' => '1',
            'state_id' => '20',
            'sort' => '1',
        ]);
        City::create([
            'id' => '21',
            'slug' => 'kherson',
            'en' => 'Kherson',
            'ru' => 'Херсон',
            'uk' => 'Херсон',
            'country_id' => '1',
            'state_id' => '21',
            'sort' => '1',
        ]);
        City::create([
            'id' => '22',
            'slug' => 'khmelnytskyi',
            'en' => 'Khmelnytskyi',
            'ru' => 'Хмельницкий',
            'uk' => 'Хмельницький',
            'country_id' => '1',
            'state_id' => '22',
            'sort' => '1',
        ]);
        City::create([
            'id' => '23',
            'slug' => 'cherkasy',
            'en' => 'Cherkasy',
            'ru' => 'Черкассы',
            'uk' => 'Черкаси',
            'country_id' => '1',
            'state_id' => '23',
            'sort' => '1',
        ]);
        City::create([
            'id' => '24',
            'slug' => 'chernihiv',
            'en' => 'Chernihiv',
            'ru' => 'Чернигов',
            'uk' => 'Чернігів',
            'country_id' => '1',
            'state_id' => '24',
            'sort' => '1',
        ]);
        City::create([
            'id' => '25',
            'slug' => 'chernivtsi',
            'en' => 'Chernivtsi',
            'ru' => 'Черновцы',
            'uk' => 'Чернівці',
            'country_id' => '1',
            'state_id' => '25',
            'sort' => '1',
        ]);


    }
}
