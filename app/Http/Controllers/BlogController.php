<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();

        return view('blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
            'title' => 'required|unique:blogs|max:255',
            'slug' => 'required|unique:blogs|max:255',
            'image' => 'required|mimes:png,jpg|max:1024',
            'description' => 'required',
        ]);

        if ($request->hasFile('image') && !empty($request->image)) {
            $image_name = "blog_" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/blog/'), $image_name);
            $validation['image'] = $image_name;
        }

        $validation['created_by'] = Auth::user()->id;
        $validation['updated_by'] = Auth::user()->id;

        Blog::create($validation);
        return redirect()->route('blog.index')->with('success', 'Blog Added Successfully');

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
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
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
        $blog = Blog::findOrFail($id); 

        $validation = $request->validate([
            'title' => ['required','max:255',Rule::unique('blogs')->ignore($blog->id)],
            'slug' => ['required','max:255',Rule::unique('blogs')->ignore($blog->id)],
            'image' => 'mimes:png,jpg|max:1024',
            'description' => 'required',
        ]);

        

        if ($request->hasFile('image') && !empty($request->image)) {
            if ($blog->image) {
                unlink(public_path('images/blog/' . $blog->image));
            }
            $image_name = "blog_" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/blog/'), $image_name);
            $validation['image'] = $image_name;
        }else{
            $validation['image'] = $blog->image;
        }

        $validation['created_by'] = $blog->created_by;
        $validation['updated_by'] = Auth::user()->id;

        $blog->update($validation);
        return redirect()->route('blog.index')->with('success', 'Blog upsate Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            unlink(public_path('images/blog/' . $blog->image));
        }
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
