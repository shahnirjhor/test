<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\Career;
use App\Models\Library;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\CaseStudies;
use App\Models\Testimonial;
use App\Models\Client;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $blog = Library::where('categories','news')->get();
        $case_studies = Library::where('categories','case-study')->get();
        return view('website.home', compact('testimonials','blog','case_studies'));
    }

    public function old_home()
    {
        $testimonials = Testimonial::all();

        return view('website.home_old', compact('testimonials'));
    }

    public function aboutUsPage()
    {
        $teams = Team::all();

        return view('website.about', compact('teams'));
    }

    public function verticalsPage()
    {
        $categories = Category::where('parent_id', NULL)->get();
        $subcategories = Category::where('parent_id', '!=', NULL)->get();

        $clients = Client::all();

        // dd($subcategories);
        // return view('website.verticals', compact('categories', 'subcategories'));
        return view('website.verticals_new', compact('categories', 'subcategories', 'clients'));
    }

    public function domainPage()
    {
        return view('website.domains');
    }
    public function electricalsolutionsPage()
    {
        return view('website.electrical-solutions');
    }

    public function instrumentationcontrolPage()
    {
        return view('website.instrumentation');
    }

    public function fireprotectionPage()
    {
        return view('website.fire-protection');
    }

    public function itinfrastructurePage()
    {
        return view('website.it-infrastructure');
    }
    public function buildingautomationsystemsPage()
    {
        return view('website.building-automation-systems');
    }
    public function ehousePage()
    {
        return view('website.e-house');
    }
    public function manufacturingFacility()
    {
        return view('website.manufacturing-facility');
    }

    public function porfolioListCategory($id)
    {
        $category = Category::where('id', $id)->first();

        $subcat = Category::where('parent_id', $id)->pluck('id');

        $portfolios = Portfolio::whereIn('subcategory_id', $subcat)->get();

        $subcategory = Category::whereIn('id', $subcat)->pluck('name');

        // dd($category->name);

        return view('website.portfolioList_new', compact('portfolios', 'category', 'subcategory'));
        // return view('website.portfolioList', compact('portfolios', 'category', 'subcategory'));
    }

    public function porfolioListPage($id)
    {
        $portfolios = Portfolio::where('subcategory_id', $id)->get();

        $subcategory = Category::where('id', $id)->pluck('name');


        return view('website.portfolioList', compact('portfolios', 'subcategory'));
    }

    public function porfolioSinglePage(Request $request)
    {
        $id  = $request->segment(4);
        // dd($id);
        $portfolio = Portfolio::where('id', $id)->first();
        // dd($portfolio);
        return view('website.portfolioSingle_new', compact('portfolio',));
        return view('website.portfolioSingle', compact('portfolio',));
    }

    public function libraryPage()
    {
        $libraries = Library::all();

        return view('website.library', compact('libraries'));
    }

    public function librarySinglePage($id)
    {
        $libraries = Library::find($id);
        dd($libraries);
        return view('website.librarySingle', compact('libraries'));
    }

    public function careerPage()
    {

        $jobs = Career::where('status', 'active')->get();

        return view('website.career', compact('jobs'));
    }


    public function careerSinglePage($id)
    {

        $job = Career::find($id);

        return view('website.career_apply', compact('job'));
    }

    public function contactPage()
    {

        return view('website.contact');
    }
    public function csrPage()
    {

        return view('website.csr');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $portfolios = Portfolio::where('title', 'like', "%$query%")
            ->orwhere('description', 'like', "%$query%")
            ->get();

        // dd($portfolios);

        return view('website.search', compact('query', 'portfolios'));
    }

    public function policyPage()
    {

        return view('website.policy');
    }


    public function libraryCategoryList($categories ="" ){
        if($categories !==""){
            $libraryLists = Library::where('categories',$categories)->get();
        }else{
            $libraryLists = Library::all();
        }
        return view('website.libraryListBycategory', compact('libraryLists'));
    }

    public function libraryDetalis($id, $category){
        
        $data = Library::where(['id'=>$id,'categories'=>$category])->first();
        return view('website.libraryDetalis',compact('data'));
    }
}
