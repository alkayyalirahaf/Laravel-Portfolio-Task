<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    public function show($id)
    {
        $developer=Developer::with('projects')->findOrFail($id);
        return view('developer.profile',compact('developer'));
    }

    public function edit($id){

    $developer =Developer::findOrFail($id);

    return view('developer.edit',compact('developer'));
    }

    
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'job_title' => 'required|string|max:255',
        'skills' => 'required|string',
    ]);

    $developer = Developer::findOrFail($id);

    $developer->name = $validated['name'];
    $developer->{'job-title'} = $validated['job_title'];

    $skills = array_map('trim', explode(',', $validated['skills']));

    $developer->skills = array_values(array_filter($skills));

    $developer->save();

    return redirect()->route('developer.show', $developer->id);
}
}

?>