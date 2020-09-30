<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Crud;

class CrudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Crud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'nama' => $this->faker->name,
            'barang'  => $this->faker->sentence,
            'deskripsi'  => $this->faker->text,
        ];
            
    }
}
