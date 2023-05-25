<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    use HasFactory;



    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}