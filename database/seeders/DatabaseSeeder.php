<?php

namespace Database\Seeders;

use CreateUsersTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contato::factory(20)->create();
        \App\Models\User::factory(5)->create();
    }
}
