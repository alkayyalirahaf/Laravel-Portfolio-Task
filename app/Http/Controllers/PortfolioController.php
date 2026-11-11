<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function home()
    {
        $developers = Developer::with('projects')->get();
        return view('portfolio.home', compact('developers'));
    }

    public function projects()
    {
        $projects = Project::All();
        return view('portfolio.projects', compact('projects'));
    }

   
}