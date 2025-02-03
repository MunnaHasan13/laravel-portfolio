<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Description for project 1.',
            'img_path' => 'storage/images/img1.png',
        ]);

        Project::create([
            'title' => 'Project 2',
            'description' => 'Description for project 2.',
            'img_path' => 'storage/images/img2.jpeg',
        ]);

        Project::create([
            'title' => 'Project 3',
            'description' => 'Description for project 3.',
            'img_path' => 'storage/images/img3.jpeg',
        ]);

    }
}
