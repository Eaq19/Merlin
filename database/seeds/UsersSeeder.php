<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            \DB::table('merlin_users')->insert(array(
                   'nombre' => $faker->firstNameFemale . ' ' . $faker->lastName,
                   'email'  => $faker->email,
                   'password'  => $faker->password,
                   'apellido'  => $faker->lastName,
                   'cc'  => $faker->address,
                   'fecha_nacimiento'  => $faker->dateTime,
                   'sexo'  => '1',
                   'estado'  => '1',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
