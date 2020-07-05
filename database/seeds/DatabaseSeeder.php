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
        $this->call(CategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PostsSedeer::class);
    }
}
