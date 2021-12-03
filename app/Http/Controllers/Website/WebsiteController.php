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

        return view('website.page.home',compact('brands', 'modals', 'issues'));
    }

    public function aboutus()
    {
        return view('website.page.aboutus');
    }


    public function saveQuote(Request $request)
    {
    	$booking=new Quote();
      	$booking->name=$request->name;
      	$booking->email=$request->email;
      	$booking->number=$request->number;

      	$booking->brand=$request->brand;
      	$booking->modal=$request->modal;
      	$booking->issue=$request->issue;

      	$booking->save();

        return back();

        
      // 	if($booking->save()){
      // 	    $userdata=array('email'=>$booking->email,'name'=>$booking->name,'number'=>$booking->number,'brand'=>$booking->brand,'modal'=>$booking->modal,'issue'=>$booking->issue);
      //       Mail::send('/email/quoteMail',['userdata' => $userdata]
      //                   , function($message) use ($userdata)
      //               {
      //                   $message->to('mmpr.sales@gmail.com')->subject('MMPR Repair Inquiry');
      //               });
      // 	

    		// return redirect()->route('/');
      //   } 


    }

      	
}
