<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    public function createOrUpdate(Request $request)
    {
        return $this->sendResponse(true, "Project created successfully");
    }

    public function getAllProjects(Request $request)
    {
        $projects = [];
        $project = new \stdClass();
        $project->name = "Test 1";
        $project->description = "Test 2";
        $projects[] = $project;
        $project = new \stdClass();
        $project->name = "Test 2";
        $project->description = "Test 2";
        $projects[] = $project;
        return $this->sendResponse($projects, "All projects fetched successfully");
    }

    public function deleteProject(Request $request)
    {
        return $this->sendResponse(true, "Project deleted successfully");
    }

    public function getAllProjectsWithTimer(Request $request)
    {
        $projects = [];
        $project = new \stdClass();
        $project->name = "Test 1";
        $project->time = 0;
        $project->description = "Test 2";
        $projects[] = $project;
        $project = new \stdClass();
        $project->name = "Test 2";
        $project->time = 10;
        $project->description = "Test 2";
        $projects[] = $project;
        return $this->sendResponse($projects, "All projects fetched successfully");
    }

    public function stopTimer(Request $request)
    {
        return $this->sendResponse("", "Timer stopped successfully");
    }

    public function startTimer(Request $request)
    {
        return $this->sendResponse("", "Timer started for this project");
    }
}
