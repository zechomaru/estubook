<?php

use Illuminate\Database\Seeder;
use App\Models\Modality;

class ModalitiesTableSeeder extends Seeder
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
          'name' => 'anual'
        ],
        [
          'name' => 'semestre'
        ],
        [
          'name' => 'trimestral'
        ],
        [
          'name' => 'lapso'
        ],
      );
      Modality::insert($data);
    }
}
