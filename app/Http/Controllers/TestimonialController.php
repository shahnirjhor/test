<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.create');
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
            'company' => 'required',
            'description' => 'required',
            //'image' => 'required|mimes:png,jpg,',
        ]);

        $testimonial = new Testimonial();

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->company = $request->company;
        $testimonial->description = $request->description;

        /* $image_name = "testimonial-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/testimonials/'), $image_name);
        $testimonial->image = $image_name; */

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial Added Successfully.');
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
        $testimonials = Testimonial::find($id);

        return view('testimonials.edit', compact('testimonials'));
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
            'company' => 'required',
            'description' => 'required',
            //'image' => 'mimes:png,jpg,',
        ]);

        $testimonial = Testimonial::find($id);

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->company = $request->company;
        $testimonial->description = $request->description;

        /* if (!empty($request->image)) {
            unlink(public_path('/images/testimonials/' . $testimonial->image));
            $image_name = "testimonial-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/testimonials/'), $image_name);
            $testimonial->image = $image_name;
        } */


        $testimonial->update();

        return redirect()->route('testimonials.index')->with('info', 'Testimonial Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $testimonial = Testimonial::find($id);
        //unlink(public_path('/images/testimonials/' . $testimonial->image));
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('error', 'Testimonial Deleted Successfully.');
    }
}
