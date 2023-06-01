<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();

        return view('career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create');
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
            'job_id' => 'required',
            'country' => 'required',
            'state' => 'required',
            'location' => 'required',
            'domain' => 'required',
            'work_preference' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg|max:1024',
            'status' => 'required',
            'last_date' => 'required',
        ]);

        $career = new Career();

        $career->name = $request->name;
        $career->job_id = $request->job_id;
        $career->country = $request->country;
        $career->state = $request->state;
        $career->location = $request->location;
        $career->domain = $request->domain;
        $career->work_preference = $request->work_preference;
        $career->description = $request->description;
        $career->status = $request->status;
        $career->last_date = $request->last_date;
        $career->image = 'hiring.jpg';

        if (!empty($request->image) && $request->image != 'hiring.jpg') {

            $image_name = "career-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/career/'), $image_name);
            $career->image = $image_name;
        }

        $career->save();

        return redirect()->route('career.index')->with('success', 'Career Added Successfully');
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
        $career = Career::find($id);

        return view('career.edit', compact('career'));
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
            'job_id' => 'required',
            'country' => 'required',
            'state' => 'required',
            'location' => 'required',
            'domain' => 'required',
            'work_preference' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg|max:1024',
            'status' => 'required',
            'last_date' => 'required',
        ]);

        $career = Career::find($id);

        $career->name = $request->name;
        $career->job_id = $request->job_id;
        $career->country = $request->country;
        $career->state = $request->state;
        $career->location = $request->location;
        $career->domain = $request->domain;
        $career->work_preference = $request->work_preference;
        $career->description = $request->description;
        $career->status = $request->status;
        $career->last_date = $request->last_date;
        $career->image = $career->image;

        if (!empty($request->image) && $request->image != 'hiring.jpg') {
            if ($career->image != 'hiring.jpg') {
                unlink(public_path('images/career/' . $career->image));
            }
            $image_name = "career-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/career/'), $image_name);
            $career->image = $image_name;
        }

        $career->update();

        return redirect()->route('career.index')->with('info', 'Career Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);

        if ($career->image != 'hiring.jpg') {
            unlink(public_path('images/career/' . $career->image));
        }
        $career->delete();

        return redirect()->route('career.index');
    }
}
