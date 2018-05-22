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
        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class, 40)->create();
        factory(App\Supplier::class, 40)->create();
        factory(App\Offering::class, 40)->create();
        factory(App\Bottle::class, 200)->create();
    }
}
