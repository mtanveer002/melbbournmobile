<?php

namespace App\Http\Controllers\Website;

use App\Models\Quote;
use App\Models\Counter;
use App\Models\Admin\Brand;
use App\Models\Admin\Issue;
use Illuminate\Http\Request;
use App\Models\Admin\BrandModal;

use App\Http\Controllers\Controller;
use App\Models\Admin\van;
use App\Models\InquiryForm;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index()
    {

        $brands = Brand::orderBy('brand', 'asc')->get();
        $modals = BrandModal::all();
        $issues = Issue::all();
        // $counters = Counter::latest()->paginate(5);
        // Counter::increment('views');
        return view('website.page.index', compact('brands', 'modals', 'issues'));
    }

    public function aboutus()
    {
        return view('website.page.aboutus');
    }

    public function shop()
    {
        return view('website.page.shop');
    }
    public function van()
    {
        return view('website.page.van');
    }
    public function contact()
    {
        return view('website.page.contact');
    }
    public function termsCondition()
    {
        return view('website.page.termsCondition');
    }
    public function privacyPolicy()
    {
        return view('website.page.privacyPolicy');
    }
    
    public function savesVanInquiry(Request $request)
    {
    //    dd($request->all());
        $users = new van();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->address = $request->address;
        $users->issue = $request->issue;
        $users->save();

            if($users->save()){
            $inq = van::latest()->first();
            $userdata=array('email'=>$inq->email,'name'=>$inq->name,'phone'=>$inq->phone,'address'=>$inq->address,'issue'=>$inq->issue,'issue'=>$inq->issue);
            Mail::send('/email/inquiryvanmail',['userdata' => $userdata]
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

            if($booking->save()){
            $inq = Quote::latest()->first();
            $userdata=array('email'=>$inq->email,'name'=>$inq->name,'number'=>$inq->number,'device'=>$inq->brand->brand,'model'=>$inq->modal->name,'issue'=>$inq->issue,'message'=>$inq->describtion,'contact_preference'=>$inq->contact_preference, 'repairing_methods' => $inq->repairing_methods);
            Mail::send('/email/saveinqery',['userdata' => $userdata]
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
