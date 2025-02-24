<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Michael Neves',
                'username' => 'Mnv',
                'email' => 'cursos@michaelneves.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('19691969')

            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedor@michaelneves.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('19691969')

            ],
            [
                'name' => 'cliente user',
                'username' => 'user',
                'email' => 'cliente@michaelneves.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('19691969')
            ]

        ]);

    }
}
