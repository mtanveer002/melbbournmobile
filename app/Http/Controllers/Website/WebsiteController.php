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
use App\Models\Booking;
// use App\Models\InquiryForm;
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
    public function apple_repairs()
    {
        return view('website.page.apple_repairs');
    }
    public function iphone()
    {
        // $models = BrandModal::where('category_name','Iphone')->orderBy('created_at', 'DESC')->get();
        $models = BrandModal::where('brand_id','1')->orderBy('created_at', 'DESC')->get();
        return view('website.page.iphone', compact('models'));
    }
    public function iphone_repairs()
    {
        // $models = BrandModal::where('category_name','iphone')->orderBy('created_at', 'DESC')->get();
        $brands = Brand::where('id','1')->orderBy('created_at', 'DESC')->get();
        $models = BrandModal::get();
        return view('website.page.iphone_repairs', compact('models', 'brands'));
    }
    public function savebooking(Request $request)
    {
    	$booking=new Booking();
      	$booking->name=$request->name;
      	$booking->model=$request->model;
      	$booking->email=$request->email;
      	$booking->number=$request->number;
      	$booking->issue=$request->issue;
      	$booking->device=$request->device;
      	$booking->shop=$request->shop;
      	$booking->message=$request->message;
      	if($booking->save()){
      	    $userdata=array('name' => $booking->name, email'=>$booking->email,'device'=>$booking->device,'number'=>$booking->number,'device'=>$booking->device,'model'=>$booking->model,'issue'=>$booking->issue,'message'=>$booking->message,'shop'=>$booking->shop);
            
              Mail::send('/email/repairinguser',['userdata' => $userdata]
                        , function($message) use ($userdata)
                    {
                        $message->to('mmpr.sales@gmail.com')->subject('MMPR Repair Inquiry');
                    });
                    
                    $notification = array (
                        'message' => 'Inqury Sent Successfully',
                        'alert-type' => 'success'
                    );
                    return back()->with($notification);
        } 
    }
    public function macbook()
    {
        $models = BrandModal::where('brand_id','35')->orderBy('created_at', 'DESC')->get();
        return view('website.page.macbook', compact('models'));
    }
    public function ipad()
    {
        $models = BrandModal::where('brand_id','34')->orderBy('created_at', 'DESC')->get();
        return view('website.page.ipad', compact('models'));
    }
    public function ipod()
    {
        $models = BrandModal::where('brand_id','38')->orderBy('created_at', 'DESC')->get();
        return view('website.page.ipod', compact('models'));
    }
    public function iwatch()
    {
        $models = BrandModal::where('brand_id','36')->orderBy('created_at', 'DESC')->get();
        return view('website.page.iwatch', compact('models'));
    }
    public function android_repairs()
    {
        return view('website.page.android_repairs');
    }
    public function samsung()
    {
        $models = BrandModal::where('brand_id','2')->orderBy('created_at', 'DESC')->get();
        return view('website.page.samsung', compact('models'));
    }
    public function sony()
    {
        $models = BrandModal::where('brand_id','4')->orderBy('created_at', 'DESC')->get();
        return view('website.page.sony', compact('models'));
    }
    public function Huawei()
    {
        $models = BrandModal::where('brand_id','6')->orderBy('created_at', 'DESC')->get();
        return view('website.page.Huawei', compact('models'));
    }
    public function htc()
    {
        $models = BrandModal::where('brand_id','9')->orderBy('created_at', 'DESC')->get();
        return view('website.page.htc', compact('models'));
    }
    public function Xiaomi()
    {
        $models = BrandModal::where('brand_id','5')->orderBy('created_at', 'DESC')->get();
        return view('website.page.Xiaomi', compact('models'));
    }
    public function oppo()
    {
        $models = BrandModal::where('brand_id','7')->orderBy('created_at', 'DESC')->get();
        return view('website.page.oppo', compact('models'));
    }
    public function OnePlus()
    {
        $models = BrandModal::where('brand_id','14')->orderBy('created_at', 'DESC')->get();
        return view('website.page.OnePlus', compact('models'));
    }
    public function nokia()
    {
        $models = BrandModal::where('brand_id','11')->orderBy('created_at', 'DESC')->get();
        return view('website.page.nokia', compact('models'));
    }
    public function lg()
    {
        $models = BrandModal::where('category_name','lg')->orderBy('created_at', 'DESC')->get();
        return view('website.page.lg', compact('models'));
    }
    public function BlackBerry()
    {
        $models = BrandModal::where('brand_id','10')->orderBy('created_at', 'DESC')->get();
        return view('website.page.BlackBerry', compact('models'));
    }
    public function asus()
    {
        $models = BrandModal::where('brand_id','15')->orderBy('created_at', 'DESC')->get();
        return view('website.page.asus', compact('models'));
    }
    public function vivo()
    {
        $models = BrandModal::where('brand_id','3')->orderBy('created_at', 'DESC')->get();
        return view('website.page.vivo', compact('models'));
    }
    public function motorola()
    {
        $models = BrandModal::where('brand_id','8')->orderBy('created_at', 'DESC')->get();
        return view('website.page.motorola', compact('models'));
    }
    public function MSsurface()
    {
        $models = BrandModal::where('brand_id','16')->orderBy('created_at', 'DESC')->get();
        return view('website.page.MSsurface', compact('models'));
    }
    public function Telsetra()
    {
        $models = BrandModal::where('category_name','Telsetra')->orderBy('created_at', 'DESC')->get();
        return view('website.page.Telsetra', compact('models'));
    }
    public function ipad_repairs()
    {
        $models = BrandModal::where('brand_id','34')->orderBy('created_at', 'DESC')->get();
        return view('website.page.ipad_repairs', compact('models'));
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
        // $booking->repairing_methods = $request->repairing_methods;
        $booking->describtion = $request->description;
        $booking->brand_id = $request->brand;
        $booking->modal_id = $request->modal;
        $booking->issue = $request->issue;
        $booking->save();

            if($booking->save()){
            $inq = Quote::latest()->first();
            $userdata=array('email'=>$inq->email,'name'=>$inq->name,'number'=>$inq->number,'device'=>$inq->brand->brand,'model'=>$inq->modal->name,'issue'=>$inq->issue,'message'=>$inq->describtion,'contact_preference'=>$inq->contact_preference);
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
