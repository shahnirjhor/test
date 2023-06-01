<?php

namespace App\Http\Controllers;

use App\Models\CaseStudies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CaseStudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $case_studies = CaseStudies::all();

        return view('caseStudies.index', compact('case_studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caseStudies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:case_studies|max:255',
            'slug' => 'required|unique:case_studies|max:255',
            'image' => 'required|mimes:png,jpg|max:1024',
            'description' => 'required',
        ]);

        if ($request->hasFile('image') && !empty($request->image)) {
            $image_name = "caseStudies" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/caseStudies/'), $image_name);
            $validation['image'] = $image_name;
        }

        $validation['created_by'] = Auth::user()->id;
        $validation['updated_by'] = Auth::user()->id;

        CaseStudies::create($validation);
        return redirect()->route('case-studies.index')->with('success', 'Case Studies Added Successfully');
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
        $case_studies = CaseStudies::findOrFail($id);
        return view('caseStudies.edit', compact('case_studies'));
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
        $case_studies = CaseStudies::findOrFail($id);

        $validation = $request->validate([
            'name' => ['required','max:255',Rule::unique('case_studies')->ignore($case_studies->id)],
            'slug' => ['required','max:255',Rule::unique('case_studies')->ignore($case_studies->id)],
            'image' => 'mimes:png,jpg|max:1024',
            'description' => 'required',
        ]);

        if ($request->hasFile('image') && !empty($request->image)) {
            if ($case_studies->image) {
                unlink(public_path('images/caseStudies/' . $case_studies->image));
            }
            $image_name = "caseStudies" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/caseStudies/'), $image_name);
            $validation['image'] = $image_name;
        }else{
            $validation['image'] = $case_studies->image;
        }

        $validation['created_by'] = Auth::user()->id;
        $validation['updated_by'] = Auth::user()->id;

        $case_studies->update($validation);
        return redirect()->route('case-studies.index')->with('success', 'Case Studies Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case_studies = CaseStudies::findOrFail($id);
        if ($case_studies->image) {
            unlink(public_path('images/caseStudies/' . $case_studies->image));
        }
        $case_studies->delete();
        return redirect()->route('case-studies.index');
    }
}
