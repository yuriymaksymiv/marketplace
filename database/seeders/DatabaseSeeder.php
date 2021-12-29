<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Region;
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
        $this->call(RegionSeeder::class);
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
            'active' => '1',
            'created_at' => '2021-12-18 13:19:30',
            'updated_at' => '2021-12-18 13:19:30',
        ]);
        User::create([
            'id' => '2',
            'name' => 'Happy Krislo',
            'email' => 'happy.krislo@gmail.com',
            'password' => '$2y$10$u98LVmqqB82kqbnacndX6ucg83echNt48tZMe44sjIEiGZQqtgh3i',
            'slug' => 'happy_krislo',
            'country' => 'Ukraine',
            'city' => 'Kyiv',
            'image' => '/images/account/2/logo.jpg',
            'phone' => '0682855009',
            'instagram' => 'happy_krislo',
            'verified' => '1',
            'active' => '1',
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
            'slug' => 'food_delivery',
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
            'sort' => '0',
        ]);
    }
}

class RegionSeeder extends Seeder
{
    public function run()
    {
        DB::table('regions')->delete();
        Region::create([
            'id' => '1',
            'slug' => 'kyivska',
            'country_id' => '1',
            'sort' => '0',
        ]);
        Region::create([
            'id' => '2',
            'slug' => 'lvivska',
            'country_id' => '1',
            'sort' => '0',
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
            'slug' => 'kyiv',
            'country_id' => '1',
            'region_id' => '1',
            'sort' => '0',
        ]);
        City::create([
            'id' => '2',
            'slug' => 'lviv',
            'country_id' => '1',
            'region_id' => '2',
            'sort' => '0',
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
            'price' => '1500',
            'currency' => 'USDT',
            'country_id' => '1',
            'region_id' => '1',
            'city_id' => '1',
            'category_id' => '1',
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
            'price' => '1050',
            'currency' => 'UAH',
            'country_id' => '1',
            'region_id' => '1',
            'city_id' => '1',
            'category_id' => '1',
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
