<?php

  $factory->define(App\User::class, function(Faker\Generator $faker) {
    static $password;

    return [
      'username' => $faker->name,
      'password' => $password ?: $password = bcrypt('secret'),
      'remember_token' => str_random(10),
    ];
  });

  $factory->define(App\Item::class, function(Faker\Generator $faker) {
    return [
      'poster' => '',
      'rating' => 1,
      'genre' => '',
      'released' => time(),
      'created_at' => time(),      
    ];
  });
