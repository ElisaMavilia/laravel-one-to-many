<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Vue.js', 'React', 'Angular', 'Bootstrap', 'Sass'];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Technology::generateSlug($newTechnology->name);
            $newTechnology->save();
        }
    }
}
