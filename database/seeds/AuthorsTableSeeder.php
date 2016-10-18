<?php

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
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
            'name' => 'xavier',
            'lastname' => 'gonzalez',
          ],
          [
            'name' => 'fer',
            'lastname' => 'perez',
          ],
          [
            'name' => 'davork',
            'lastname' => 'gonzalez',
          ],
        );
        Author::insert($data);
    }
}
