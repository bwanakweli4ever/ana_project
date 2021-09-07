<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AssignTrees;
use Faker\Generator as Faker;

$factory->define(AssignTrees::class, function (Faker $faker) {

    return [
        'Tree_category' => $this->faker->word,
        'schoo_to_be_assigned_to' => $this->faker->text,
        'number_to_assign' => $this->faker->randomDigitNotNull,
        'comment' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
