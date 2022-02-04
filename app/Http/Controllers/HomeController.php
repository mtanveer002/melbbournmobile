<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Quote;
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
        $counters = Counter::latest()->paginate(5);
        Counter::increment('views');
        $inquiries = Quote::get()->count();
        $approvedInquiries = Quote::where('status', 1)->get()->count();
        $pendingInquiries = Quote::where('status', 0)->get()->count();
        return view('admin.layouts.page', compact('counters','inquiries','approvedInquiries','pendingInquiries'));
    }
}
