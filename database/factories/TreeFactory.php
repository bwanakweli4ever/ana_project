<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tree;
use Faker\Generator as Faker;

$factory->define(Tree::class, function (Faker $faker) {

    return [
        'tree_name' => $this->faker->text,
        'description' => $this->faker->word,
        'status' => $this->faker->randomElement(['New', 'Planted', 'Damaged', 'Lost', 'Under Treatment']),
        'available_number' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
