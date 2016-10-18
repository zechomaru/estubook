<?php

use Illuminate\Database\Seeder;
use App\Models\Period;
class PeriodsTableSeeder extends Seeder
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
            'career_id' => 1,
            'name' => 'año escolar',
            'start' => '2015-01-01',
            'end' => '2016-01-01',
          ],
          [
            'career_id' => 2,
            'name' => 'año escolar',
            'start' => '2015-01-01',
            'end' => '2016-01-01',
          ],
          [
            'career_id' => 3,
            'name' => 'año escolar',
            'start' => '2015-01-01',
            'end' => '2016-01-01',
          ],
          [
            'career_id' => 4,
            'name' => 'primer lapso',
            'start' => '2015-01-01',
            'end' => '2015-04-01',
          ],
          [
            'career_id' => 4,
            'name' => 'segundo lapso',
            'start' => '2015-04-01',
            'end' => '2015-08-01',
          ],
          [
            'career_id' => 4,
            'name' => 'tercer lapso',
            'start' => '2015-08-01',
            'end' => '2015-12-01',
          ],
          [
            'career_id' => 5,
            'name' => 'primer lapso',
            'start' => '2015-01-01',
            'end' => '2015-04-01',
          ],
          [
            'career_id' => 5,
            'name' => 'segundo lapso',
            'start' => '2015-04-01',
            'end' => '2015-08-01',
          ],
          [
            'career_id' => 5,
            'name' => 'tercer lapso',
            'start' => '2015-08-01',
            'end' => '2015-12-01',
          ],
          [
            'career_id' => 6,
            'name' => 'primer lapso',
            'start' => '2015-01-01',
            'end' => '2015-04-01',
          ],
          [
            'career_id' => 6,
            'name' => 'segundo lapso',
            'start' => '2015-04-01',
            'end' => '2015-08-01',
          ],
          [
            'career_id' => 6,
            'name' => 'tercer lapso',
            'start' => '2015-08-01',
            'end' => '2015-12-01',
          ],
          [
            'career_id' => 8,
            'name' => 'primer semestre',
            'start' => '2015-01-01',
            'end' => '2015-06-01',
          ],
          [
            'career_id' => 8,
            'name' => 'segundo semestre',
            'start' => '2015-06-01',
            'end' => '2015-12-01',
          ],
        );
        Period::insert($data);
        Period::create([
            'career_id' => 7,
            'name' => 'curso',
          ]);
    }
}