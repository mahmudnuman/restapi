<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Model\Product::class,100)->create();
         factory(App\Model\Review::class,300)->create();
    }
}
