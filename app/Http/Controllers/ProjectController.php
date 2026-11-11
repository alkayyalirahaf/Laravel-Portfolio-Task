<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));
    }


    public function create()
{
    $developers = Developer::all();

    return view('admin.projects.create', compact('developers'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'developer_id' => 'required|exists:developers,id',
    ]);

    $developer = Developer::findOrFail($validated['developer_id']);

    $developer->projects()->create([
        'title' => $validated['title'],
        'description' => $validated['description'],
    ]);

    return redirect()->route('admin.projects.index');
}

public function edit($id)
{
    $project = Project::findOrFail($id);
    $developers = Developer::all();

    return view('admin.projects.edit', compact('project', 'developers'));
}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'developer_id' => 'required|exists:developers,id',
    ]);

    $project = Project::findOrFail($id);

    $project->title = $validated['title'];
    $project->description = $validated['description'];

    $developer = Developer::findOrFail($validated['developer_id']);
    $project->developer()->associate($developer);

    $project->save();

    return redirect()->route('admin.projects.index');
}

public function destroy($id)

{
    $project = Project::findOrFail($id);

    $project->delete();

    return redirect()->route('admin.projects.index');
}

}
