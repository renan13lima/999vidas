<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'postagem_id' => '1',
            'user_id' => '1',
            'conteudo' => 'Muito bom o artigo!',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => '2',
            'user_id' => '1',
            'conteudo' => 'Parabéns!',
        ]);
    }
}
