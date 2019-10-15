<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [[
                'name' => 'Nathan',
                'email' => 'nimal@email.com',
                'password' => bcrypt('12345678'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => 'David',
                'email' => 'hashim@email.com',
                'password' => bcrypt('12345678'),
                'created_at'
                => new DateTime,
                'updated_at'
                => new DateTime,
            ],]

        );
































    }
}
