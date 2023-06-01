<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = Portfolio::all();

        // dd($portfolios);

        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = collect(Category::where('parent_id', null)->get());

        return view('portfolio.create', compact('categories'));
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
            'subcategory' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg|max:2048',
        ]);


        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->category_id = $request->categories;
        $portfolio->subcategory_id = $request->subcategory;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        $portfolio->location = $request->location;
        $portfolio->year = $request->year;
        $portfolio->client = $request->client;
        $portfolio->delivery_method = $request->delivery_method;

        $image_name = "portfolio-" . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/portfolio/'), $image_name);
        $portfolio->image = $image_name;
        // dd($portfolio);
        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio Created Successfully');
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
        $portfolio = Portfolio::find($id);
        $categories = collect(Category::where('parent_id', null)->get());
        $subcategories = collect(Category::where('parent_id', '!=', null)->get());

        return view('portfolio.edit', compact('portfolio', 'categories', 'subcategories'));
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
            'subcategory' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'mimes:png,jpg|max:2048',
        ]);


        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->title;
        $portfolio->category_id = $request->categories;
        $portfolio->subcategory_id = $request->subcategory;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        $portfolio->location = $request->location;
        $portfolio->year = $request->year;
        $portfolio->client = $request->client;
        $portfolio->delivery_method = $request->delivery_method;

        if (!empty($request->image)) {
            unlink(public_path('/images/portfolio/' . $portfolio->image));
            $image_name = "portfolio-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/portfolio/'), $image_name);
            $portfolio->image = $image_name;
        }
        // dd($portfolio);
        $portfolio->update();

        return redirect()->route('portfolios.index')->with('info', 'Portfolio Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        unlink(public_path('/images/portfolio/' . $portfolio->image));
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('error', 'Portfolio has beed deleted successfully');
    }
}
