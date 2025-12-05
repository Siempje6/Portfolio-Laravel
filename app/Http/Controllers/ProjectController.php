<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $highlightedProject = Project::with('images')->first();

        $projects = Project::with('images')->get();

        return view('index', compact('highlightedProject', 'projects'));
    }
}
