<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Resenha',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Artigo',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Citação',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Indicação',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Outros',
        ]);

    }
}
