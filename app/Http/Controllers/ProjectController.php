<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Project;
use Input;
use Image;
class ProjectController extends Controller
{
    public function addProject(Request $request)
	{
        if($request->isMethod('post')){
            $data = $request->all();
            $project = new Project;
            $project->project_name = $data['project_name'];
            $project->project_link = $data['project_link'];
            if(!empty($data['project_description'])){
                $project->project_description = $data['project_description'];
            }else{
                $project->project_description = '';
            }
            if ($request->hasfile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $project_path = 'uploads/project/'.$filename;

                    Image::make($image_tmp)->save($project_path);
                    $project->image = $filename;
                }
            }
            $project->save();
            return redirect('/4rmw3b/add-project')->with('flash_message_success','Project Added Successully');
        }
		return view('admin.add-project');
	}
	public function viewProject()
	{
		//echo "string";
        $projects = Project::get();
		return view('admin.view-project')->with(compact('projects'));
	}
}
