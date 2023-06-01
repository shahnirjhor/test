<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();

        return view('gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            'title' => 'required|min:5',
            'image' => 'required|mimes:png,jpg|max:1024'
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        $image_name = "gallery-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/gallery/'), $image_name);
        $gallery->image = $image_name;

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery Image Added Successfully');
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
        $gallery = Gallery::find($id);

        return view('gallery.edit', compact('gallery'));
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
            'title' => 'required|min:5',
            'image' => 'required|mimes:png,jpg|max:1024'
        ]);

        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        unlink(public_path('/images/gallery/' . $gallery->image));
        $image_name = "gallery-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/gallery/'), $image_name);
        $gallery->image = $image_name;

        $gallery->update();

        return redirect()->route('gallery.index')->with('info', 'Gallery Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        unlink(public_path('/images/gallery/' . $gallery->image));
        $gallery->delete();

        return redirect()->route('gallery.index')->with('error', 'Gallery Image Deleted Successfully');
    }
}
