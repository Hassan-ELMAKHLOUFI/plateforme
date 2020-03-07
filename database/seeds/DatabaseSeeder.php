<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create();
        // $this->call(UsersTableSeeder::class);
        DB::table('departement')->insert(
            [
                'nom' => 'Informatique',
                'date_cr' => \Carbon\Carbon::create('1990', '5', '2'),
                'chef' => 'M.Oumsis',
                'date_fin' => \Carbon\Carbon::create('2020', '10', '3'),
            ]
        );

        DB::table('filiere')->insert([
            'departement_id' => 1,
            'nom' => 'GL',
            'coordinateur' => $faker->name,
            'datedebut' => $faker->dateTime(),
            'datefin' => $faker->dateTime(),

        ]);

        DB::table('niveau')->insert([
            'nom' => 'premiere',
        ]);

        DB::table('niveau')->insert([
            'nom' => 'deuxieme',
        ]);
        DB::table('niveau')->insert([
            'nom' => 'troiseme',
        ]);

        foreach (range(1, 50) as $i) {
            DB::table('etudiant')->insert([
                'cin' => $faker->randomNumber(6),
                'cne' => $faker->randomNumber(6),
                'nom' => $faker->name,
                'prenom' => $faker->lastName,
                'filiere_id' => 1,
                'niveau_id' => 1,
                'email_address' => $faker->email,
                'numero' => $faker->randomNumber(),
                'num_apologie' => $faker->randomNumber(6)
            ]);
        }
    }

}
