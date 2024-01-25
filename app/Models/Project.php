<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'link', 'image'];

    public function skills() // skill_id
    {
        return $this->hasMany(Skill::class);
    }
}
