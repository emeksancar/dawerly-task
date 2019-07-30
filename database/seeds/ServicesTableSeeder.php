<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Hair Cut',
            'price' => 100,
        ]);
        Service::create([
            'name' => 'Skin Care',
            'price' => 250,
        ]);
        Service::create([
            'name' => 'Makeup',
            'price' => 50,
        ]);
        Service::create([
            'name' => 'Weight Loss',
            'price' => 1000,
        ]);
    }
}
