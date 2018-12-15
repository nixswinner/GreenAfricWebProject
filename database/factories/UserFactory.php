<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\ProductCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(5),
        'image' => $faker->imageUrl(),
        'name' => $faker->name,
        'unit_price' => 100,
        'product_category_id' => function() {
            return factory(App\ProductCategory::class)->create()->id;
        }
    ];
});

$factory->define(App\Basket::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        }
    ];
});

$factory->define(App\BasketItem::class, function (Faker $faker) {
    return [
        'quantity'=>$faker->randomNumber(2),
        'total' => $faker->randomNumber(2),
        'basket_id'=> function() {
            return factory(App\Basket::class)->create()->id;
        },
        'product_id' => function() {
            return factory(App\Product::class)->create()->id;
        }
    ];
});

