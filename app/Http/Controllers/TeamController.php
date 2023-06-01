<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg|max:1024',
        ]);

        $team = new Team();

        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;

        $image_name = "team-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/team/'), $image_name);
        $team->image = $image_name;

        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->email = $request->email;

        $team->save();

        return redirect()->route('team.index')->with('success', 'Team Memeber Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Team::find($id);

        return view('team.edit', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg|max:1024',
        ]);

        $team = Team::find($id);

        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;

        if ($request->image !='') {

            unlink(public_path('/images/team/' . $team->image));
            $image_name = "team-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/team/'), $image_name);
            $team->image = $image_name;
        }
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->email = $request->email;

        $team->update();

        return redirect()->route('team.index')->with('info', 'Team Memeber Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        unlink(public_path('/images/team/' . $team->image));
        $team->delete();

        return redirect()->back();
    }
}
