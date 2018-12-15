<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        $categories = factory(App\ProductCategory::class, 10)->create();
        $categories->each(function($category) {factory(App\Product::class, 5)->create(['product_category_id' => $category->id]);});
        $categories = factory(App\Basket::class, 10)->create();
        $categories = factory(App\BasketItem::class, 20)->create();
    }
}
