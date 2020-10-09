<?php

use Illuminate\Database\Seeder;

class ReactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reaction::class, 7)->create();
    }
}
