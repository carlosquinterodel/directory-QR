<?php

namespace Database\Seeders;
use App\Models\City;

use Illuminate\Database\Seeder;

class AddCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::updateOrCreate( [ 'name' => 'Medellín' ] );
        City::updateOrCreate( [ 'name' => 'Barranquilla' ] );
        City::updateOrCreate( [ 'name' => 'Cartagena de Indias' ] );
        City::updateOrCreate( [ 'name' => 'Tunja' ] );
        City::updateOrCreate( [ 'name' => 'Manizales' ] );
        City::updateOrCreate( [ 'name' => 'Popayán' ] );
        City::updateOrCreate( [ 'name' => 'Valledupar' ] );
        City::updateOrCreate( [ 'name' => 'Montería' ] );
        City::updateOrCreate( [ 'name' => 'Bogotá' ] );
        City::updateOrCreate( [ 'name' => 'Pereira' ] );
        City::updateOrCreate( [ 'name' => 'Bucaramanga' ] );
        City::updateOrCreate( [ 'name' => 'Ibagué' ] );
        City::updateOrCreate( [ 'name' => 'Santiago de Cali' ] );
        City::updateOrCreate( [ 'name' => 'Neiva' ] );
        City::updateOrCreate( [ 'name' => 'Santa Marta' ] );
        City::updateOrCreate( [ 'name' => 'Armenia' ] );
    }
}
