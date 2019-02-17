<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
	public function index()
	{
		$projects = Project::all();

		return view('projects.index', compact('projects'));
	}

	public function create()
	{
		return view('projects.create');
	}

	public function store()
	{
		$project = new Project;

		$project->title = request('Title');
		$project->description = request('Description');

		$project->save();

		return redirect('/projects');
	}

	public function update($id)
	{
		$project = new Project;
		$projectId = $project->find($id);
		$projectId->Project->title = request('Title');
		$projectId->Project->description = request('Description');

		$projectId->Project->save();
		
	}
}
