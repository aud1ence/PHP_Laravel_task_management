<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Task;
use Database\Factories\TaskFactory;
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
        Product::factory(10)->create();
        $this->call(TasksTableSeeder::class);
        Task::factory(10)->create();
    }
}
