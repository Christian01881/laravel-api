<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(3);
        return response()->json([
            "success" => true,
            "results" => $projects
        ]);
    }

    public function show($id)
    {
        $project = Project::where('id', $id)->first();
        return response()->json([
            "success" => true,
            "results" => $project
        ]);
    }
}
