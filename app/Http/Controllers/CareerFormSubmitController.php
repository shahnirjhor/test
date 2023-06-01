<?php

namespace App\Http\Controllers;


use App\Models\CareerFormSubmitted;
use Illuminate\Http\Request;

class CareerFormSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs_applied = CareerFormSubmitted::all();

        return view('job-applied.index', compact('jobs_applied'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $jobs_applied = CareerFormSubmitted::find($id);

        return view('job-applied.edit', compact('jobs_applied'));
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
        $jobs = CareerFormSubmitted::find($id);

        $jobs->status = $request->status;
        $jobs->update();

        return redirect()->route('jobs-applied.index')->with('info', 'Status Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $jobs = CareerFormSubmitted::find($id);

        unlink(public_path('biodata/' . $jobs->biodata));

        $jobs->delete();

        return redirect()->back();
    }

    public function formDataStore(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'experience' => 'required',
            'biodata' => 'required|mimes:pdf|max:2048',
        ]);

        $formdata = new CareerFormSubmitted();

        $formdata->name = $request->name;
        $formdata->email = $request->email;
        $formdata->phone = $request->phone;
        $formdata->experience = $request->experience;
        $formdata->career_name = $request->career_name;

        $biodata_name = "biodata-" . time() . '.' . $request->biodata->extension();
        $request->biodata->move(public_path('biodata/'), $biodata_name);
        $formdata->biodata = $biodata_name;
        $formdata->status = 'applied';



        $formdata->save();



        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'experience' => $request->experience,
            'biodata' => $biodata_name,
            'career_name' => $request->career_name,
        ];

        event(new EventsCareerFormSubmitted($data));


        return redirect()->back()->with('success', 'Your Form Submitted Successfully');
    }
}
