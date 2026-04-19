<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        // 🔥 Fallback SaaS si DB vide
        if ($projects->isEmpty()) {
            $projects = collect([
                (object)[
                    "id" => 1,
                    "title" => "Système de gestion AGD (Stage)",
                    "description" => "Application web de gestion clients et commandes avec php/Laravel et Oracle.",
                    "tech" => "php/Laravel • Oracle • API REST",
                    "image" => null,
                    "link" => null
                ],
                (object)[
                    "id" => 2,
                    "title" => "API REST Gestion Clients",
                    "description" => "API CRUD complète pour gestion clients et commandes.",
                    "tech" => "PHP • API • JSON",
                    "image" => null,
                    "link" => null
                ],
                (object)[
                    "id" => 3,
                    "title" => "Dashboard Admin ",
                    "description" => "Interface admin moderne avec statistiques et gestion messages.",
                    "tech" => "Laravel • Bootstrap • UX",
                    "image" => null,
                    "link" => null
                ],
                (object)[
                    "id" => 4,
                    "title" => "Portfolio Moderne",
                    "description" => "Portfolio professionnel avec UI moderne et animation UX.",
                    "tech" => "Laravel • UI/UX • Frontend",
                    "image" => null,
                    "link" => null
                ]
            ]);
        }

        return view('pages.projects', compact('projects'));
    }

    public function show($id)
    {
        $projects = $this->index()->getData()['projects'];

        $project = $projects->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('pages.project-detail', compact('project'));
    }
}