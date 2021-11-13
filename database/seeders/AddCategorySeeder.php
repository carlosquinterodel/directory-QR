<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class AddCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate( [ 'name' => 'Comidas Rapidas' ] );
        Category::updateOrCreate( [ 'name' => 'Cafetería' ] );
        Category::updateOrCreate( [ 'name' => 'Restaurante' ] );
        Category::updateOrCreate( [ 'name' => 'Bares' ] );
        Category::updateOrCreate( [ 'name' => 'Hoteles' ] );
        Category::updateOrCreate( [ 'name' => 'Moteles' ] );
        Category::updateOrCreate( [ 'name' => 'Farmacias' ] );
        Category::updateOrCreate( [ 'name' => 'Supermercados' ] );
        Category::updateOrCreate( [ 'name' => 'Peluquerías' ] );
        Category::updateOrCreate( [ 'name' => 'Talleres mecánicos' ] );
        Category::updateOrCreate( [ 'name' => 'Licorerias' ] );
        Category::updateOrCreate( [ 'name' => 'Tiendas de Ropa' ] );
        Category::updateOrCreate( [ 'name' => 'Tiendas de Variedades' ] );
        Category::updateOrCreate( [ 'name' => 'Otras' ] );
    }
}
