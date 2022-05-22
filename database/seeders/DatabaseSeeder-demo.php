<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ItemImageSeeder::class);
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
            'ua' => ' Україна',
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
            'slug' => 'vinnitsa-region',
            'country_id' => '1',
            'sort' => '1',
        ]);
        State::create([
            'id' => '2',
            'slug' => 'volyn-region',
            'country_id' => '1',
            'sort' => '2',
        ]);
        State::create([
            'id' => '3',
            'slug' => 'dnepropetrovsk-region',
            'country_id' => '1',
            'sort' => '3',
        ]);
        State::create([
            'id' => '4',
            'slug' => 'donetsk-region',
            'country_id' => '1',
            'sort' => '4',
        ]);
        State::create([
            'id' => '5',
            'slug' => 'zhytomyr-region',
            'country_id' => '1',
            'sort' => '5',
        ]);
        State::create([
            'id' => '6',
            'slug' => 'zakarpattia-region',
            'country_id' => '1',
            'sort' => '6',
        ]);
        State::create([
            'id' => '7',
            'slug' => 'zaporizhzhia-region',
            'country_id' => '1',
            'sort' => '7',
        ]);
        State::create([
            'id' => '8',
            'slug' => 'ivano-frankivsk-region',
            'country_id' => '1',
            'sort' => '8',
        ]);
        State::create([
            'id' => '9',
            'slug' => 'kiev-region',
            'country_id' => '1',
            'sort' => '9',
        ]);
        State::create([
            'id' => '10',
            'slug' => 'kirovograd-region',
            'country_id' => '1',
            'sort' => '10',
        ]);
        State::create([
            'id' => '11',
            'slug' => 'crimea-ar',
            'country_id' => '1',
            'sort' => '11',
        ]);
        State::create([
            'id' => '12',
            'slug' => 'lugansk-region',
            'country_id' => '1',
            'sort' => '12',
        ]);
        State::create([
            'id' => '13',
            'slug' => 'lviv-region',
            'country_id' => '1',
            'sort' => '13',
        ]);
        State::create([
            'id' => '14',
            'slug' => 'mykolayiv-region',
            'country_id' => '1',
            'sort' => '14',
        ]);
        State::create([
            'id' => '15',
            'slug' => 'odessa-region',
            'country_id' => '1',
            'sort' => '15',
        ]);
        State::create([
            'id' => '16',
            'slug' => 'poltava-region',
            'country_id' => '1',
            'sort' => '16',
        ]);
        State::create([
            'id' => '17',
            'slug' => 'rivne-region',
            'country_id' => '1',
            'sort' => '17',
        ]);
        State::create([
            'id' => '18',
            'slug' => 'sumy-region',
            'country_id' => '1',
            'sort' => '18',
        ]);
        State::create([
            'id' => '19',
            'slug' => 'ternopil-region',
            'country_id' => '1',
            'sort' => '19',
        ]);
        State::create([
            'id' => '20',
            'slug' => 'kharkiv-region',
            'country_id' => '1',
            'sort' => '20',
        ]);
        State::create([
            'id' => '21',
            'slug' => 'kherson-region',
            'country_id' => '1',
            'sort' => '21',
        ]);
        State::create([
            'id' => '22',
            'slug' => 'khmelnitsky-region',
            'country_id' => '1',
            'sort' => '22',
        ]);
        State::create([
            'id' => '23',
            'slug' => 'cherkasy-region',
            'country_id' => '1',
            'sort' => '23',
        ]);
        State::create([
            'id' => '24',
            'slug' => 'chernihiv-region',
            'country_id' => '1',
            'sort' => '24',
        ]);
        State::create([
            'id' => '25',
            'slug' => 'chernivtsi-region',
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
            'slug' => 'vinnitsa',
            'country_id' => '1',
            'state_id' => '1',
            'sort' => '1',
        ]);
        City::create([
            'id' => '2',
            'slug' => 'lutsk',
            'country_id' => '1',
            'state_id' => '2',
            'sort' => '1',
        ]);
        City::create([
            'id' => '3',
            'slug' => 'dnepropetrovsk',
            'country_id' => '1',
            'state_id' => '3',
            'sort' => '1',
        ]);
        City::create([
            'id' => '4',
            'slug' => 'donetsk',
            'country_id' => '1',
            'state_id' => '4',
            'sort' => '1',
        ]);
        City::create([
            'id' => '5',
            'slug' => 'zhytomyr',
            'country_id' => '1',
            'state_id' => '5',
            'sort' => '1',
        ]);
        City::create([
            'id' => '6',
            'slug' => 'uzhhorod',
            'country_id' => '1',
            'state_id' => '6',
            'sort' => '1',
        ]);
        City::create([
            'id' => '7',
            'slug' => 'zaporizhzhia',
            'country_id' => '1',
            'state_id' => '7',
            'sort' => '1',
        ]);
        City::create([
            'id' => '8',
            'slug' => 'ivano-frankivsk',
            'country_id' => '1',
            'state_id' => '8',
            'sort' => '1',
        ]);
        City::create([
            'id' => '9',
            'slug' => 'kiev',
            'country_id' => '1',
            'state_id' => '9',
            'sort' => '1',
        ]);
        City::create([
            'id' => '10',
            'slug' => 'kropyvnytskyi',
            'country_id' => '1',
            'state_id' => '10',
            'sort' => '1',
        ]);
        City::create([
            'id' => '11',
            'slug' => 'simferopol',
            'country_id' => '1',
            'state_id' => '11',
            'sort' => '1',
        ]);
        City::create([
            'id' => '12',
            'slug' => 'lugansk',
            'country_id' => '1',
            'state_id' => '12',
            'sort' => '1',
        ]);
        City::create([
            'id' => '13',
            'slug' => 'lviv',
            'country_id' => '1',
            'state_id' => '13',
            'sort' => '1',
        ]);
        City::create([
            'id' => '14',
            'slug' => 'mykolayiv',
            'country_id' => '1',
            'state_id' => '14',
            'sort' => '1',
        ]);
        City::create([
            'id' => '15',
            'slug' => 'odessa',
            'country_id' => '1',
            'state_id' => '15',
            'sort' => '1',
        ]);
        City::create([
            'id' => '16',
            'slug' => 'poltava',
            'country_id' => '1',
            'state_id' => '16',
            'sort' => '1',
        ]);
        City::create([
            'id' => '17',
            'slug' => 'rivne',
            'country_id' => '1',
            'state_id' => '17',
            'sort' => '1',
        ]);
        City::create([
            'id' => '18',
            'slug' => 'sumy',
            'country_id' => '1',
            'state_id' => '18',
            'sort' => '1',
        ]);
        City::create([
            'id' => '19',
            'slug' => 'ternopil',
            'country_id' => '1',
            'state_id' => '19',
            'sort' => '1',
        ]);
        City::create([
            'id' => '20',
            'slug' => 'kharkiv',
            'country_id' => '1',
            'state_id' => '20',
            'sort' => '1',
        ]);
        City::create([
            'id' => '21',
            'slug' => 'kherson',
            'country_id' => '1',
            'state_id' => '21',
            'sort' => '1',
        ]);
        City::create([
            'id' => '22',
            'slug' => 'khmelnitsky',
            'country_id' => '1',
            'state_id' => '22',
            'sort' => '1',
        ]);
        City::create([
            'id' => '23',
            'slug' => 'cherkasy',
            'country_id' => '1',
            'state_id' => '23',
            'sort' => '1',
        ]);
        City::create([
            'id' => '24',
            'slug' => 'chernihiv',
            'country_id' => '1',
            'state_id' => '24',
            'sort' => '1',
        ]);
        City::create([
            'id' => '25',
            'slug' => 'chernivtsi',
            'country_id' => '1',
            'state_id' => '25',
            'sort' => '1',
        ]);


    }
}

class ItemImageSeeder extends Seeder
{
    public function run()
    {
        DB::table('item_images')->delete();
        ItemImage::create([
            'id' => '1',
            'user_id' => '1',
            'item_id' => '1',
        ]);
        ItemImage::create([
            'id' => '2',
            'user_id' => '2',
            'item_id' => '2',
        ]);

    }
}

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->delete();
        Item::create([
            'id' => '1',
            'user_id' => '1',
            'title' => 'INS Token',
            'description' => 'Нет ничего невозможного с iPhone 13
                Оцените самую продвинутую систему из двух камер 12 Мп, суперспособности чипа A15 Bionic, возросшую автономность аккумулятора и новый взгляд на прочность и вопросы личной безопасности. Встречайте новый iPhone 13.',
            'slug' => 'iphon-13',
            'crypto_price' => '50',
            'crypto_currency' => 'usdt',
            'price' => '1500',
            'currency' => 'uah',
            'country_id' => '1',
            'state_id' => '1',
            'city_id' => '1',
            'category_id' => '1',
            'sub1_category_id' => '0',
            'sub2_category_id' => '0',
            'type' => 'product',
            'image' => '/images/account/1/items/1.jpg',
            'views' => '1',
            'check' => '1',
            'published' => '1',
            'status' => 'active',
            'sort_at' => '2021-12-18 13:19:30',
            'ends_at' => '2021-12-18 13:19:30',
            'created_at' => '2021-12-18 13:19:30',
            'updated_at' => '2021-12-18 13:19:30',
        ]);
        Item::create([
            'id' => '2',
            'user_id' => '2',
            'title' => 'Крісло "Оксамит"',
            'description' => '<p><span class="" style="caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);">Одне з найвідоміших стільців в історії дизайну. Крісло ідеально вписується майже у будь-який простір.<br><br>Матеріал: Сидіння поліпропілен, металевий каркас в порошковій фарбі, натуральні дерев’яні ніжки<br><br>🔹Висота - 73см<br>🔹Висота сидіння - 48см<br>🔹Ширина - 46см<br>🔹Макс.навант. - 120кг<br>🎨Кольори: Рожевий, синій, чорний, сірий, жовтий, зелений!<br><br>Для замовлення пишіть в приват!!!</span><br></p>',
            'slug' => 'pig-1',
            'crypto_price' => '50',
            'crypto_currency' => 'usdt',
            'price' => '1050',
            'currency' => 'uah',
            'country_id' => '1',
            'state_id' => '1',
            'city_id' => '1',
            'category_id' => '1',
            'sub1_category_id' => '0',
            'sub2_category_id' => '0',
            'type' => 'product',
            'image' => '/images/account/2/items/1.jpg',
            'views' => '1',
            'check' => '1',
            'published' => '1',
            'status' => 'active',
            'sort_at' => '2021-12-18 13:19:30',
            'ends_at' => '2021-12-18 13:19:30',
            'created_at' => '2021-12-18 13:19:30',
            'updated_at' => '2021-12-18 13:19:30',
        ]);

    }
}
