<?php

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareersTableSeeder extends Seeder
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
            'academy_id' => 1,
            'modality_id' => 1,
            'name' => '1er grado',
            'description' => 'primer grado'
          ],
          [
            'academy_id' => 1,
            'modality_id' => 1,
            'name' => '2do grado',
            'description' => 'segundo grado'
          ],
          [
            'academy_id' => 1,
            'modality_id' => 1,
            'name' => '3er grado',
            'description' => 'tercero grado'
          ],
          [
            'academy_id' => 2,
            'modality_id' => 4,
            'name' => '7 grado',
            'description' => '7 grado'
          ],
          [
            'academy_id' => 2,
            'modality_id' => 4,
            'name' => '8 grado',
            'description' => '8 grado'
          ],
          [
            'academy_id' => 2,
            'modality_id' => 4,
            'name' => '9 grado',
            'description' => '9 grado'
          ],
          [
            'academy_id' => 3,
            'modality_id' => 3,
            'name' => 'developer',
            'description' => 'desarrollador junior'
          ],
          [
            'academy_id' => 4,
            'modality_id' => 2,
            'name' => 'informatica',
            'description' => 'carrera universitaria de informatica'
          ],
          [
            'academy_id' => 4,
            'modality_id' => 2,
            'name' => 'derechos',
            'description' => 'carrera universitaria de derechos'
          ],
          [
            'academy_id' => 4,
            'modality_id' => 2,
            'name' => 'recurso humano',
            'description' => 'carrera universitaria de recurso humano'
          ],
        );

        Career::insert($data);
    }
}
