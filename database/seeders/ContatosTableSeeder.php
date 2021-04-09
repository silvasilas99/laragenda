<?php

namespace Database\Seeders;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Contato;


class ContatosTableSeeder extends Seeder
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Opção 1
        DB::table('contatos')->insert([
            'saudacao' => 'Sr.', 
            'nome' => 'Silas Silva',
            'telefone' => '(71) 99999-9999',
            'data_nascimento' => '2021-04-08',
            'email' => 'silvasilas66@gmail.com',
            'nota' => 'Usuário criado com o método DB::',
            'created_at' => date('Y-m-d H:i:s')
        ]);


        //Opção 2
        Contato::factory()
            ->count(20)
            ->hasPosts(1)
            ->create();
    }
}
