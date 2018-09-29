<?php
/**
 * Created by PhpStorm.
 * User: BENJIRO
 * Date: 9/29/2018
 * Time: 3:31 PM
 */

use Faker\Generator as Faker;
$factory->define(App\Messages::class, function (Faker $faker) {
    return [

        'message_body' => $faker->text(191),
        'date' => $faker->date('Y-m-d'),
        'type' => $faker->text(20),
        'year' => '2018/2019',
        'semester' => rand(1,2),
        'status' => rand(0,1),
        'sent_by' => 'TTU',
        'phone_number' => $faker->phoneNumber,
        'name' => $faker->name,
    ];
});
