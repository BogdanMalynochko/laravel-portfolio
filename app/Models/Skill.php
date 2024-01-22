<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Skill extends Model
{
    use HasFactory;

    public function project() // project_id
    {
        return $this->belongsTo(Project::class);
    }
}
