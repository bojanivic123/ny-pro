<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "type"];

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public function coverLetters()
    {
        return $this->hasMany(CoverLetter::class);
    }
}

