<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Renan Lima',
            'email' => 'renan13lima13@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'nick' => 'renan nick',
            'biografia' => 'renan biografia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Jesus',
            'email' => 'jesus@doceu.com',
            'password' => Hash::make('123456789'),
            'role' => 'normal',
            'nick' => 'jesus nick',
            'biografia' => 'jesus biografia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
