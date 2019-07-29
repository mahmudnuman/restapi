<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
    	'product_id' =>function() {
    	return Product::All()->Random();
    	},

    	'customer' => $faker->name,
    	'star' => $faker->numberBetween(1,5),
        'review' => $faker->paragraph,
        
    ];
});
