<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'Vue', 'PHP', 'Laravel'];

        foreach($technologies as $technology)
        {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->save();
        }
    }
}
