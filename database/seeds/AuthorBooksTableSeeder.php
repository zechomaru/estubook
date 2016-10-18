<?php

use Illuminate\Database\Seeder;

class AuthorBooksTableSeeder extends Seeder
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
                'author_id' => 1,
                'book_id' => 1,
              ],
              [
                'author_id' => 2,
                'book_id' => 1,
              ],
              [
                'author_id' => 1,
                'book_id' => 2,
              ],
              [
                'author_id' => 2,
                'book_id' => 3,
              ],
              [
                'author_id' => 3,
                'book_id' => 4,
              ],

            );
            DB::table('authors_books')->insert($data);
      
    }
}
