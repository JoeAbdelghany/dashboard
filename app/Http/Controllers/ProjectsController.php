<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    private static function projects() {
            $projects = [];
            for ($i=0;$i<count(Project::all());$i++) {
                $project = Project::all()[$i];
                $projects[$i] = [
                    'id' => $project['id'],
                ];;
            }
            return $projects;
    }
    public function index () {
        return self::projects();
    }


    public function store(Request $request){}

    public function show($id)
    {
        $projects = self::projects();
        $index = array_search($id,array_column($projects, 'id'));
        $project = $projects[$index];
        if ($id <= count($projects) && $id > 0) {
            return $project;
        }else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
