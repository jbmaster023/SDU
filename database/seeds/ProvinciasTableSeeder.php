<?php

use Illuminate\Database\Seeder;
use App\Provincias;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		Provincias::create([
				'nombre' => 'Santo Domingo'

			]);

		Provincias::create([
				'nombre' => 'Azua'

			]);

		Provincias::create([
				'nombre' => 'Baoruco'

			]);

		Provincias::create([
				'nombre' => 'Barahona'

			]);

		Provincias::create([
				'nombre' => 'Dajabón'

			]);

		Provincias::create([
				'nombre' => 'Duarte'

			]);

		Provincias::create([
				'nombre' => 'Elías Piña'

			]);

		Provincias::create([
				'nombre' => 'El Seibo'

			]);

		Provincias::create([
				'nombre' => 'Espaillat'

			]);

		Provincias::create([
				'nombre' => 'Hato Mayor'

			]);

		Provincias::create([
				'nombre' => 'Hermanas Mirabal'

			]);

		Provincias::create([
				'nombre' => 'Independencia'

			]);

		Provincias::create([
				'nombre' => 'La Altagracia'

			]);

		Provincias::create([
				'nombre' => 'La Romana'

			]);

		Provincias::create([
				'nombre' => 'La Vega'

			]);

		Provincias::create([
				'nombre' => 'María Trinidad'

			]);

		Provincias::create([
				'nombre' => 'Monseñor Nouel'

			]);

		Provincias::create([
				'nombre' => 'Monte Cristi'

			]);

		Provincias::create([
				'nombre' => 'Monte Plata'

			]);

		Provincias::create([
				'nombre' => 'Pedernales'

			]);

		Provincias::create([
				'nombre' => 'Peravia'

			]);

		Provincias::create([
				'nombre' => 'Puerto Plata'

			]);

		Provincias::create([
				'nombre' => 'Samaná'

			]);

		Provincias::create([
				'nombre' => 'Sánchez Ramírez'

			]);

		Provincias::create([
				'nombre' => 'San Cristóbal'

			]);

		Provincias::create([
				'nombre' => 'San José de Ocoa'

			]);

		Provincias::create([
				'nombre' => 'San Juan'

			]);

		Provincias::create([
				'nombre' => 'San Pedro de Macorís'

			]);

		Provincias::create([
				'nombre' => 'Santiago'

			]);

		Provincias::create([
				'nombre' => 'Santiago Rodríguez'

			]);

		Provincias::create([
				'nombre' => 'Valverde'

			]);
    }
}
