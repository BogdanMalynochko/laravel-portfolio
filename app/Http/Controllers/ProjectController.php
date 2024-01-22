<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(2);
        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function ajaxPagination(Request $request)
    {
        $projects = Project::paginate(2, ['*'], 'page', $request->page);
        return view('projects.pagination', [
            'projects' => $projects,
        ]);
    }
}
