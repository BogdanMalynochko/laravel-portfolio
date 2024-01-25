<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class AdminController extends Controller
{
    // Projects

    public function index()
    {
        return view('admin.projects.index', [
            'projects' => Project::all(),
            'skills' => Skill::all(),
        ]);
    }

    public function projects()
    {
        return view('admin.projects.projects', [
            'projects' => Project::all(),
        ]);
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|unique:projects,name',
            'description' => 'required',
            'link' => 'required|unique:projects,link',
            'skill' => 'required|exists:skills,id',
        ]);

        Project::create($attributes);
        return redirect('/admin/dashboard/projects')->with('success', 'Project created successfully');
    }

    public function destroy(Project $project) 
    {
        $project->delete();

        return redirect('/admin/dashboard/projects/')->with('success', 'Project Deleted!');
    }

    // Skills
}
