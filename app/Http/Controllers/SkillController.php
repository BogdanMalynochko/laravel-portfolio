<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('skills.index', [
            'skills' => Skill::all()
        ]);
    }
}
