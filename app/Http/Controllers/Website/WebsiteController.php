<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\BrandModal;
use App\Models\Admin\Issue;
use App\Models\Counter;
use App\Models\Quote;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $brands = Brand::orderBy('brand', 'asc')->get();
        $modals = BrandModal::all();
        $issues = Issue::all();
        // $counters = Counter::latest()->paginate(5);
        // Counter::increment('views');
        return view('website.page.home', compact('brands', 'modals', 'issues'));
    }

    public function aboutus()
    {
        return view('website.page.aboutus');
    }

    public function shop()
    {
        return view('website.page.shop');
    }

    public function contact()
    {
        return view('website.page.contact');
    }
    public function termsCondition()
    {
        return view('website.page.termsCondition');
    }

    public function saveQuote(Request $request)
    {
    //    dd($request->all());
        $booking = new Quote();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->number = $request->number;
        $booking->contact_preference = $request->contact_preference;
        $booking->repairing_methods = $request->repairing_methods;
        $booking->describtion = $request->description;
        $booking->brand_id = $request->brand;
        $booking->modal_id = $request->modal;
        $booking->issue = $request->issue;
        $booking->save();

        $notification = array (
            'message' => 'Inqury Sent Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function getIssue($modal)
    {
        $issue = Issue::where('modal_id', $modal)->get();
        // dd($issue);
        return json_encode($issue);
    }
}
