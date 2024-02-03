<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tulaj', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Moderátor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Riporter', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Felhasználó', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Felfügesztet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tiltott', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('roles')->insert($roles);
    }
}