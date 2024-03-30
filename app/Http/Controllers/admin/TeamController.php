<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.team.index',[
            'teams'=>Team::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name'=>'required',
                'image'=>'mimes:webp,jpg,jpeg,png',
                'email'=>'unique:teams,email',
                'phone'=>'unique:teams,phone',
            ]);

            Team::newTeam($request);
            return back()->with('message','New Team Add Successfully.');
        }
        catch (Exception $e){
            return back()->with('message',$e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show',[
            'team'=>$team,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',[
            'team'=>$team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        try {
            $this->validate($request,[
                'name'=>'required',
                'image'=>'mimes:webp,jpg,jpeg,png',
                'email'=> Rule::unique('teams')->ignore($team->id),
                'phone'=> Rule::unique('teams')->ignore($team->id),
            ]);

            Team::updateTeam($request,$team->id);
            return redirect()->route('teams.index')->with('message','Update Successfully.');
        }
        catch (Exception $e){
            return back()->with('message',$e->getMessage());
        }
    }
    public function updateStatus(Request $request,$id){
        Team::updatePublishedStatus($request,$id);
        return back()->with('message',"update status success.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        Team::deleteTeam($team->id);
        return back()->with('message',"Delete Team Success.");
    }
}
