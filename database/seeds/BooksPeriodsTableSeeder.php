<?php

use Illuminate\Database\Seeder;

class BooksPeriodsTableSeeder extends Seeder
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
            'book_id' => 1,
            'period_id' => 1,
          ],
          [
            'book_id' => 2,
            'period_id' => 1,
          ],
          [
            'book_id' => 3,
            'period_id' => 1,
          ],
          [
            'book_id' => 1,
            'period_id' => 2,
          ],
          [
            'book_id' => 2,
            'period_id' => 2,
          ],
          [
            'book_id' => 3,
            'period_id' => 2,
          ],
          [
            'book_id' => 1,
            'period_id' => 3,
          ],
          [
            'book_id' => 2,
            'period_id' => 3,
          ],
          [
            'book_id' => 3,
            'period_id' => 3,
          ],
          [
            'book_id' => 1,
            'period_id' => 4,
          ],
          [
            'book_id' => 2,
            'period_id' => 5,
          ],
          [
            'book_id' => 3,
            'period_id' => 6,
          ],
          [
            'book_id' => 1,
            'period_id' => 7,
          ],
          [
            'book_id' => 2,
            'period_id' => 8,
          ],
          [
            'book_id' => 3,
            'period_id' => 9,
          ],
          [
            'book_id' => 1,
            'period_id' => 10,
          ],
          [
            'book_id' => 2,
            'period_id' => 11,
          ],
          [
            'book_id' => 3,
            'period_id' => 12,
          ],
          [
            'book_id' => 2,
            'period_id' => 13,
          ],
          [
            'book_id' => 3,
            'period_id' => 14,
          ],
          [
            'book_id' => 3,
            'period_id' => 15,
          ],


        );
        DB::table('books_periods')->insert($data);
    }
}
