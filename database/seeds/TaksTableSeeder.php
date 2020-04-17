<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $task = new Task([
            'description' => 'description1'
        ]);
        

        $task = new Task([
            'description' => 'description2'
        ]);
        

        $task = new Task([
            'description' => 'description3'
        ]);

        $task->save();
    }
}
