<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = Library::all();
        return view('library.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('library.create');
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
            'title' => 'required',
            'categories' => 'required',
            'image' => 'required|mimes:png,jpg|max:2048',
            'description' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'meta_title' => 'required',
        ]);

        $libraries = new Library();

        $libraries->title = $request->title;
        $libraries->categories = $request->categories;
        $libraries->description = $request->description;

        $image_name = "library-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/library/'), $image_name);
        $libraries->image = $image_name;

        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $keywords = $request->keywords;

        $seo = [
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'keywords' => $keywords,
        ];

        $libraries->seo = json_encode($seo);

        if ($request->categories == 'events') {
            $request->validate([
                'event_date' => 'required',
                'event_venue' => 'required',
            ]);
            $libraries->event_date = $request->event_date;
            $libraries->event_venue = $request->event_venue;
        }

        if ($request->categories == 'technical-publication-and-case-studies') {
            $request->validate([
                'brochure' => 'mimes:pdf|max:2048'
            ]);

            $brochure_name = "brochure-" . time() . '.' . $request->brochure->extension();
            $request->brochure->move(public_path('/images/library/'), $brochure_name);
            $libraries->brochure = $brochure_name;
        }


        $libraries->save();

        return redirect()->route('libraries.index')->with('success', 'Library Added Successfully');
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
        $libraries = Library::find($id);

        $seo = json_decode($libraries->seo, true);

        $meta_title = $seo['meta_title'];
        $meta_description = $seo['meta_description'];
        $keywords = $seo['keywords'];

        return view('library.edit', compact('libraries', 'meta_title', 'meta_description', 'keywords'));
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
            'title' => 'required',
            'categories' => 'required',
            'image' => 'mimes:png,jpg|max:2048',
            'description' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'meta_title' => 'required',
        ]);

        $libraries =  Library::find($id);

        $libraries->title = $request->title;
        $libraries->categories = $request->categories;
        $libraries->description = $request->description;

        if (!empty($request->image)) {
            unlink(public_path('/images/library/' . $libraries->image));
            $image_name = "library-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/library/'), $image_name);
            $libraries->image = $image_name;
        }
        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $keywords = $request->keywords;

        $seo = [
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'keywords' => $keywords,
        ];

        $libraries->seo = json_encode($seo);

        if ($request->categories == 'events') {
            $request->validate([
                'event_date' => 'required',
                'event_venue' => 'required',
            ]);
            $libraries->event_date = $request->event_date;
            $libraries->event_venue = $request->event_venue;
        }

        if ($request->categories == 'technical-publication-and-case-studies') {
            $request->validate([
                'brochure' => 'mimes:pdf|max:2048'
            ]);
            unlink(public_path('/images/library/' . $libraries->brochure));
            $brochure_name = "brochure-" . time() . '.' . $request->brochure->extension();
            $request->brochure->move(public_path('/images/library/'), $brochure_name);
            $libraries->brochure = $brochure_name;
        }


        $libraries->update();

        return redirect()->route('libraries.index')->with('info', 'Library Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libraries = Library::find($id);

        unlink(public_path('/images/library/' . $libraries->image));

        if (!empty($libraries->brochure)) {
            unlink(public_path('/images/library/' . $libraries->brochure));
        }

        $libraries->delete();

        return redirect()->route('libraries.index')->with('error', 'Library Deleted Successfully');
    }
}
