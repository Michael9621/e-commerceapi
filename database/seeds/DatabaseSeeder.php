<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Review;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class,5)->create();
        factory(Product::class,50)->create();
        factory(Review::class,300)->create();
    }
}
