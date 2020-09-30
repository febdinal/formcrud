<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crud;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();
        Crud::factory()
            ->times(10) // bikin 10 blog
            ->create();
    }
    
}
