<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder {
    public function run(): void {
        Project::create([
            'title' => 'Projet Portfolio Laravel',
            'description' => 'Un projet complet pour présenter mes compétences.',
            'image' => 'project1.jpg',
            'link' => '#'
        ]);

        Project::create([
            'title' => 'Site Web E-commerce',
            'description' => 'Développement d’un site e-commerce moderne.',
            'image' => 'project2.jpg',
            'link' => '#'
        ]);
         Project::create([
            'title' => 'Application REST API',
            'description' => 'Création d’une API REST avec Laravel pour gérer des clients et commandes.',
            'image' => 'project3.jpg',
            'link' => '#'
        ]);
    }
}