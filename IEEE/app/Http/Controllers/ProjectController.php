<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App\Project;

class ProjectController extends Controller
{

    public function index(){

        $projects = Project::all();
        return View::make('projetos')->with('projects',$projects);
    }

    public function single($id)
    {
        $project = Project::all()->where('id', $id)->first();
        return View::make('projetosdetalhe')->with('project', $project);
    } 


}
