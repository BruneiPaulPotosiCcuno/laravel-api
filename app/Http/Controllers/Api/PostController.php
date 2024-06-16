<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PostController extends Controller
{
    public function index() {
            $projects = Project::with('type', 'tags')->get();
        
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
