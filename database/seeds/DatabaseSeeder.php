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
        $this->call(CarsTableSeeder::class);
    }
}

class CarsTableSeeder extends Seeder
{
	public function run(){

		factory(App\Car::class, 10)->create();
	}
}
