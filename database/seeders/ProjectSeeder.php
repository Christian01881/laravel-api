<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('boolpress.posts');
        foreach($projects as $project){
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->body = $project['body'];
            $newProject->image = $project['image'];
            $newProject->save();
        }
    }
}
