<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        factory(App\Model\User::class, 2)->create();
    }
}