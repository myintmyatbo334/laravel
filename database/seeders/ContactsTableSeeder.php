<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        $contacts = [];
        $faker =Faker::create();

        foreach(range(1, 100) as $index) {
            $contacts[] = [
                'first_name' => $faker->firstname(),
                'last_name' => $faker->lastname(),
                'phone' => $index,
                'email' =>  $faker->email(),
                'address' =>  $faker->address(),
                'company_id' =>  $index,
                'country_id' =>  1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
    }
    DB::table('contacts')->insert($contacts);
}

}