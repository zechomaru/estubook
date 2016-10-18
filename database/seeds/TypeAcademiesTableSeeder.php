<?php

use Illuminate\Database\Seeder;
use App\Models\TypeAcademy;

class TypeAcademiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
        ['name' => 'colegio'],
        ['name' => 'liceo'],
        ['name' => 'academia'],
        ['name' => 'universidad']
        );
      TypeAcademy::insert($data);
    }

}
