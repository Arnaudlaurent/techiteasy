<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('users__admins')->insert([
            'login' => 'admin',
            'first_name'=>'benjamin',
            'name'=>'lemee',
            'email' => 'lemee.benjamin@hotmail.fr',
            'password' => bcrypt('toor'),
        ]);

        /*$admin->questions()->sync([1, 2]);
        $admin->save();*/
    }
}
