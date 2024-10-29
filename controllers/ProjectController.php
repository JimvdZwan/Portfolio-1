<?php

require 'models/ProjectModel.php';
class ProjectController
{
    public function __construct()
    {
        $this->project = new ProjectModel();
    }
    public function home()
    {
        $projects = $this->project->showAll();
       return view('project', compact('projects'));
    }

    public function add()
    {
         $this->project->add();
         header('location: project');
    }

    public function delete()
    {
        $this->project->delete();
        header('location: project');
    }

    public function update()
    {
        $project = $this->project->update();
        return view('project-upd', compact('project'));
    }

    public function store()
    {
        $this->project->store();
        header('location: project');
    }
}