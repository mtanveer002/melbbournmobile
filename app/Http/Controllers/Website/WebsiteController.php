<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\BrandModal;
use App\Models\Admin\Issue;
use App\Models\Quote;
use Mail;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $brands = Brand::all();
        $modals = BrandModal::all();
        $issues = Issue::all();

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

    public function saveQuote(Request $request)
    {
     
        
        $booking = new Quote();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->number = $request->number;
        $booking->describtion = $request->description;
        $booking->brand_id = $request->brand;
        $booking->modal_id = $request->modal;
        $booking->issue_id = $request->issue;
        $booking->save();


        $clientBooking = Quote::latest()->first();
        
        if($booking->save()){
            $userdata=array('email'=>$booking->email,'name'=>$booking->name,'number'=>$booking->number,'brand'=>$clientBooking->brand->brand,'modal'=>$clientBooking->modal->name,'issue'=>$clientBooking->issues->issue, 'description'=>$booking->describtion);
            
            Mail::send('/email/quoteMail',['userdata' => $userdata]
                      , function($message) use ($userdata)
                  {
                      $message->to('mmpr.sales@gmail.com')->subject('MMPR Repair Inquiry');
                  });
                        } 


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
