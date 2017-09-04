<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo 'database1';
        Model::unguard();

        $this->call(UsersTableSeeder::class);echo 'database2';
        $this->call(CategoriesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(QuestionnairesTableSeeder::class);
        
        Model::unguard();

    }
}
