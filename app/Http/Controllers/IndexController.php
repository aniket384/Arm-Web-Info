<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class IndexController extends Controller
{
    public function index()
    {
    	return view('arm.index');
    }
    public function about()
    {
    	return view('pages.about');
    }
    public function contact()
    {
    	return view('pages.contact');
    }
    public function projects()
    {
    	$projects = Project::get();
        return view('pages.project')->with(compact('projects'));
    }
    public function privacy()
    {
    	return view('pages.privacy');
    }
    public function services()
    {
    	return view('pages.services');
    }
}
