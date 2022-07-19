<?php

namespace Database\Seeders;
use App\Models\Postings;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postings::factory()
        ->count(100)
       
        ->create();
    }
}