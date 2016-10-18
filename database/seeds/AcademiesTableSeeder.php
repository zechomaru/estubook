<?php

use Illuminate\Database\Seeder;
use App\Models\Academy;

class AcademiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
          [
            'type_academy_id' => 1,
            'name' => 'san agustin',
            'slug' => 'san-agustin',
            'color' => '#9778F5',
            'phone' => '232132',
            'description' => 'colegio catolico de primaria de 1er grado a 6to grado',
          ],
          [
            'type_academy_id' => 2,
            'name' => 'jose cortes madariaga',
            'slug' => 'jose-cortes-madariaga',
            'color' => '#D465DB',
            'phone' => '232132',
            'description' => 'liceo de secundaria',
          ],
          [
            'type_academy_id' => 3,
            'name' => 'hack academy',
            'slug' => 'hack-academy',
            'color' => '#E05A17',
            'phone' => '232132',
            'description' => 'academia de preparación de programadores',
          ],
          [
            'type_academy_id' => 4,
            'name' => 'santa maria',
            'slug' => 'santa-maria',
            'color' => '#B140EE',
            'phone' => '232132',
            'description' => 'universidad',
          ],
        );
        Academy::insert($data);

    }
}
