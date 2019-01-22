<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//$factory->define(App\Worker::class, function (Faker $faker, $worker) {
//
//    $gender = $faker->randomElement(['male', 'female']);
//    $folder = ($gender == 'male') ? 'men' : 'women';
//    $firstName = $faker->firstName($gender);
//    $lastName = $faker->lastName;
//    $email = strtolower($firstName.'.'.$lastName).'@'.$faker->freeEmailDomain;
//    $avatar = $folder .'/'. random_int (1 , 99 );
//    file_put_contents('test.txt', $worker->id);
//
//    return [
//        'first_name'  => $firstName,
//        'last_name'   => $lastName,
//        'phone'       => $faker->numerify('(###) ###-####'),
//        'email'       => $email,
//        'position_id' => random_int (1 , 100 ),
//        'salary'      => random_int (1000 , 20000 ),
//        'parent_id'   => random_int (1 , 50000 ),
//        'avatar'      => $avatar,
//        'hiring_date' => $faker->date($format = 'Y-m-d'),
//        'level' => 0
//    ];
//});
//
//$factory->afterCreating(App\Worker::class, function ($worker, $faker) {
//    if($worker->level == 0){
//        $worker->level = 1;
//    }
//    $worker->update();
//});

