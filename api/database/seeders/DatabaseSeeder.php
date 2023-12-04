<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(UsersSeeder::class);
       $this->call(AerolineasSeeder::class);
       $this->call(AeropuertosSeeder::class);
       $this->call(VuelosSeeder::class);
       $this->call(PasajerosSeeder::class);
       $this->call(ReservasSeeder::class);
    }
}
