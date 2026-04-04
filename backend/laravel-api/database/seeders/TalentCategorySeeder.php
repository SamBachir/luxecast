<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalentCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('talent_categories')->insert([
            ['name' => 'Editorial Model'],
            ['name' => 'Commercial Talent'],
            ['name' => 'Brand Ambassador'],
            ['name' => 'Actor'],
            ['name' => 'Host / MC'],
            ['name' => 'Creator / Influencer'],
        ]);
    }
}
