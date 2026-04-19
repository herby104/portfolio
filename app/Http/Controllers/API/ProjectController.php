<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    // 📌 GET all projects (pagination)
    public function index()
    {
        return ProjectResource::collection(
            Project::paginate(10)
        );
    }

    // 📌 GET one project
    public function show($id)
    {
        return new ProjectResource(
            Project::findOrFail($id)
        );
    }

    // 📌 CREATE project
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        // upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project = Project::create($data);

        return response()->json([
            'message' => 'Project created successfully',
            'data' => new ProjectResource($project)
        ], 201);
    }

    // 📌 UPDATE project
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return response()->json([
            'message' => 'Project updated',
            'data' => new ProjectResource($project)
        ]);
    }

    // 📌 DELETE project
    public function destroy($id)
    {
        Project::destroy($id);

        return response()->json([
            'message' => 'Project deleted'
        ]);
    }
}