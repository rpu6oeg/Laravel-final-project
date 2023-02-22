<?php

namespace Database\Seeders;

use App\Models\CategoryBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryBook::query()->create(['name' => 'Fantastic']);
        CategoryBook::query()->create(['name' => 'Dramma']);
        CategoryBook::query()->create(['name' => 'Comedic']);
        CategoryBook::query()->create(['name' => 'Detectiv']);
    }
}
