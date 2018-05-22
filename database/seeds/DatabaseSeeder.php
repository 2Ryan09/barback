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

        factory(App\Product::class)->create([
                'name' => "Jack Daniel's Tennessee Whiskey",
                'category' => 'Spirit',
                'origin' => 'Tennessee, USA',
                'unit_type' => 'Bottle',
                'unit_volume' => '750',
                'alcohol_content' => '4000',
                'sugar_content' => NULL,
                'producer_name' => 'Brown-Forman Louisville Operations',
                'release_date' => '2012-04-17',
                'is_seasonal' => FALSE,
                'is_kosher' => TRUE,
                'description' => "Established in 1866, Jack Daniel's was the first registered distillery in the United States. The distillery is located in the dry city of Lynchburg which only adds to the unique legend of the spirit. Light gold with corn meal, caramel and cedar aromas; the palate is smooth and sweet with a slightly spicy finish.",
                'pairing' => NULL,
                'img_url' => "http://www.lcbo.com/content/dam/lcbo/products/041384.jpg/jcr:content/renditions/cq5dam.web.1280.1280.jpeg",
                'varietal' => 'Whiskey',
                'style' => 'Medium & Sweet',
                'upc' => '082184090466'
        ]);

        factory(App\Supplier::class, 40)->create();
        factory(App\Offering::class, 40)->create();
        factory(App\Bottle::class, 200)->create();
    }
}
