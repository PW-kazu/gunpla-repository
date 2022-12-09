<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illiminate\Support\Facades\DB;
use App\Models\Modeller;

class ModelersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modeller::factory()->count(100)->create();
    }
}
