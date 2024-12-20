<?php
class ProjectController
{
    public function index()
    {
       $project = Project::all();
       include __DIR__ . '/../views/projects/index.php';
    }
}
