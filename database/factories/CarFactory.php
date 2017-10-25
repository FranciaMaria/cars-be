<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

	$values = collect([
        'Electric',
        'Hybrid',
        'Diesel',
        'Petrol',
        'Automatic'
    ]);

	return [
        'mark' => $faker->text(10),
        'model' => $faker->text(10),
        'year' => $faker->numberBetween(1900, 2017),
        'maxSpeed' => $faker->numberBetween(20, 300),
        'isAutomatic' => $faker->boolean(),
        'engine' => $values->random(1),
        'numberOfDoors' => $faker->numberBetween(2, 5)
    ];
});



