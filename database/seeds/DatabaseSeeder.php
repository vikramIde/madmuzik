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
    	 Model::unguard();
    	 //DB::table('artists');
        factory(App\Artist::class, 50)->create();

          Model::reguard();
    }
}
