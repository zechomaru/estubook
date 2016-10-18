<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksTableSeeder extends Seeder
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
            'title' => 'titulo 1',
            'isbn' => '32324433',
            'number_page' => '100',
            'year_publication' => '2014',
            'edition' => '2',
            'price'     => 275.00,
            'observations' => 'Lorem ipsum.'
          ],
          [
            'title' => 'titulo 2',
            'isbn' => '323',
            'number_page' => '100',
            'year_publication' => '2014',
            'edition' => '2',
            'price'     => 300.00,
            'observations' => 'Lorem ipsum.'
          ],
          [
            'title' => 'titulo 3',
            'isbn' => '323434243',
            'number_page' => '100',
            'year_publication' => '2014',
            'edition' => '2',
            'price'     => 20.00,
            'observations' => 'Lorem ipsum.'
          ],
          [
            'title' => 'titulo 4',
            'isbn' => '323243333',
            'number_page' => '100',
            'year_publication' => '2014',
            'edition' => '2',
            'price'     => 150.00,
            'observations' => 'Lorem ipsum.'
          ],
        );
        Book::insert($data);
    }
}
