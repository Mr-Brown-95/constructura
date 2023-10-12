<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesFicticiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(); // Usar el Facade Faker

        foreach (range(1, 50) as $index) {
            DB::table('client')->insert([
                'proyecto' => $faker->words(3, true),
                'nombre' => $faker->firstName,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName,
                'rfc' => $faker->unique()->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
                'email' => $faker->unique()->safeEmail,
                'dir_calle' => $faker->streetName,
                'dir_numExt' => $faker->buildingNumber,
                'dir_numInt' => $faker->buildingNumber,
                'telefono' => $faker->phoneNumber,
            ]);
        }
    }
}
