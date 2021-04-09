<?php

namespace Database\Factories;

use App\Models\Contato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


// $factory->define(App\Contato::class, function (Faker $faker) {
//     return [
//         'saudacao' => 'Sr. ',
//         'nome' => $faker->name,
//         'telefone' => $faker->cellphoneNumber,
//         'data_nascimento' => $faker->data('Y-m-d'),
//         'email' => $faker->unique()->safeEmail,
//         'nota' => 'Usuário criado usando método factory e classe Faker.'
//     ];
// });

class ContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'saudacao' => 'Sr. ',
            'nome' => $this->faker->name,
            'telefone' => $this->faker->cellphoneNumber,
            'data_nascimento' => $this->faker->date('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail,
            'nota' => 'Usuário criado usando método factory e classe Faker.'
        ];
    }
}
