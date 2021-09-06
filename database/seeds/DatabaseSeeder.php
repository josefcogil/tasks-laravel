<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->truncate();
        $this->call(TasksTableSeeder::class);
    }
}
