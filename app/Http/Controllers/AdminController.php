<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'projects' => Project::all(),
            'skills' => Skill::all(),
        ]);
    }

    public function projects()
    {
        return view('admin.projects', [
            'projects' => Project::all(),
        ]);
    }

    public function destroy(Project $project) 
    {
        $project->delete();

        return redirect('/admin/dashboard/projects/')->with('success', 'Project Deleted!');
    }
}
