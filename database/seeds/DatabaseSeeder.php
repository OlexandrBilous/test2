<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
         $this->call(   ArticlesTableSeeder::class);
    }
}
class ArticlesTableSeeder extends Seeder {

    public function run()
    {

        DB::insert('INSERT INTO `articles` (`content`, `title`, `postdate`) VALUES ("sample text sample text sample text", "NiceArticle", "2019.10.10")');
        DB::insert('INSERT INTO `articles` (`content`, `title`, `postdate`) VALUES ("sample car tree house", "TheArticle", "2019.03.14")');
        DB::insert('INSERT INTO `articles` (`content`, `title`, `postdate`) VALUES ("extended life magazine", "NewArticle", "2018.03.10")');
        DB::insert('INSERT INTO `articles` (`content`, `title`, `postdate`) VALUES ("waterpark text sample text", "LastArticle", "2017.04.01")');
    }

}
