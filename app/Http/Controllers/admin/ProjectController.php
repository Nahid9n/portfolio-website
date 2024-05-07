<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Project;
use App\Models\ProjectOtherImage;
use App\Models\Team;
use Illuminate\Http\Request;
use Exception;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.project.index',[
            'projects'=>Project::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.add',[
            'teams'=>Team::where('status',1)->get(),
            'categories'=>Category::where('status',1)->get(),
            'clients'=>Client::where('status',1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'mimes:jpg,jpeg,png,webp,tiff',
            ]);
            $project = Project::newProject($request);
            if ($request->other_images){
                ProjectOtherImage::newImage($request->other_images,$project->id);
            }
            return back()->with('message','Project Add Successfully.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $team_ids = json_decode($project->team_id);

        $teams = Team::whereIn('id',$team_ids)->get();
        $images = ProjectOtherImage::where('project_id',$project->id)->get();
        return view('admin.project.show',[
            'project'=>$project,
            'teams'=>$teams,
            'images'=>$images,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        if ($project->team_id != ''){
            $teamss = Team::whereIn('id',json_decode($project->team_id))->get();
        }
        $images = ProjectOtherImage::where('project_id',$project->id)->get();
        return view('admin.project.edit',[
            'project'=>$project,
            'teamss'=>$teamss,
            'images'=>$images,
            'teams'=>Team::where('status',1)->get(),
            'categories'=>Category::where('status',1)->get(),
            'clients'=>Client::where('status',1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'mimes:jpg,jpeg,png,webp,tiff',
            ]);
            Project::updateProject($request,$project->id);
            if ($request->other_images){
                ProjectOtherImage::updateProjectImage($request->other_images,$project->id);
            }
            return redirect()->route('projects.index')->with('message','Project Update Successfully.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }
    public function updateStatus(Request $request, $id)
    {
        Project::updatePublishedStatus($request,$id);
        return back()->with('message','Project Status Change Successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Project::deleteProject($project->id);
        ProjectOtherImage::deleteProjectImage($project->id);
        return back()->with('message','Project Delete Successfully.');
    }
}
