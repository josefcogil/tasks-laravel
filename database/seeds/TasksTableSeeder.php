<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    
    public function run()
    {
        $data = [
            [
                'title' => 'Task one',
                'description' => 'This is the task one description'
            ],
            [
                'title' => 'Task two',
                'description' => 'This is the task two description'
            ]
        ];
        
        DB::table('tasks')->insert($data);
    }
}
