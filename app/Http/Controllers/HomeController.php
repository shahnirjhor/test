<?php

namespace App\Http\Controllers;

use App\Models\CareerFormSubmitted;
use App\Models\Contact;
use App\Models\Library;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portfolio = Portfolio::count();
        $library = Library::count();
        $career = CareerFormSubmitted::count();
        $contact = Contact::count();

        $career_applied = CareerFormSubmitted::orderBy('created_at', 'DESC')->get();


        // dd($portfolio);
        return view('home', compact('portfolio', 'library', 'career', 'contact', 'career_applied'));
    }
}
