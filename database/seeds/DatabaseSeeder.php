<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TypeAcademiesTableSeeder::class);
        $this->call(AcademiesTableSeeder::class);
        $this->call(ModalitiesTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(AuthorBooksTableSeeder::class);
        $this->call(BooksPeriodsTableSeeder::class);

    }
}
