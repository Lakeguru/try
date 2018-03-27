<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Service;
use App\Gallery;
use App\Product;
use Carbon\Carbon;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicecount = Service::count();
        $productcount = Product::count();
        $gallerycount = Gallery::count();
        $contacts = Contact::latest()->get();
        $contacttoday= Contact::whereRaw('date(created_at) = ?', [Carbon::today()])->count();
        return view('home',compact('servicecount','productcount','contacttoday','gallerycount','contacts'));
    }
}
