<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', null)->select('name', 'id', 'image')->orderby('name', 'asc')->get();

        $sub_categories = Category::join('categories as parent', 'categories.parent_id', '=', 'parent.id')
            ->where('categories.parent_id', '!=', null)
            ->orderBy('categories.name', 'asc')
            ->selectRaw("concat(parent.name, ' -- ', categories.name) as name , categories.id as id, categories.image")
            ->get();


        // dd($categories);

        $all_categories =  $categories->concat($sub_categories);
        // dd($all_categories);

        return view('categories.index', compact('all_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();

        return view('categories.create', compact('categories'));
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
            'name'      => 'required',
            'slug'      => 'required|unique:categories',
            'image'      => 'required|mimes:png,jpg,',
            'parent_id' => 'nullable|numeric'
        ]);

        $categories = new Category();
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->parent_id = $request->parent_id;

        $image_name = "category-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/category_icons/'), $image_name);
        $categories->image = $image_name;

        $categories->save();

        return redirect()->route('categories.index')->with('success', 'Category has been created successfully.');
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
        $categories = Category::find($id);
        $all_categories = Category::where('parent_id', null)->where('id', '!=', $id)->orderby('name', 'asc')->get();

        return view('categories.edit', compact('categories', 'all_categories'));
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
            'name'      => 'required',
            'slug'      => 'required|unique:categories,slug,' . $id,
            'parent_id' => 'nullable|numeric'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        if ($request->image != '') {
            unlink(public_path('/images/category_icons/' . $category->image));
            $image_name = "category-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/category_icons/'), $image_name);
            $category->image = $image_name;
        }
        $category->update();

        return redirect()->route('categories.index')->with('info', 'Category has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
    }

    public function Sub_Categories($id)
    {
        $sub_categories = Category::where('parent_id', $id)->pluck('name', 'id');

        return response()->json($sub_categories);
    }
}
