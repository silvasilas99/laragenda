<?php

namespace Database\Seeders;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserTableSeeder extends Seeder
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
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'silas.silva@ssit.com.br',
            'password' => bcrypt('secret'),
            'created_at' => date('Y-m-d H:i:s')
        ]);


        // Opção 2 User
        User::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}
