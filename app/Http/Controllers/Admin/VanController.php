<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\inquiryMail;
use App\Models\Admin\van;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = van::paginate(5);
        return view('admin.van.index', compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.van.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = "your inquiry noted! we'll let you know soon!";
        $inquiries = new van();
        $inquiries->name = $request->name;
        $inquiries->email = $request->email;
        $inquiries->address = $request->address;
        $inquiries->phone = $request->phone;
        $inquiries->brand = $request->brand;
        $inquiries->model = $request->model;
        $inquiries->issue = $request->issue;
        $inquiries->time = $request->time;
        $inquiries->price = $request->price;
        $inquiries->save();
        Mail::to($request->email)->Send(new inquiryMail($data));
        $notification = array (
            'message' => 'Inquiry Add Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.van.index')->with($notification);
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
        $inquiries = van::findOrFail($id);
        return view('admin.van.edit', compact('inquiries'));
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
        $inquiries = van::findOrFail($id);
        $inquiries->name = $request->name;
        $inquiries->email = $request->email;
        $inquiries->address = $request->address;
        $inquiries->phone = $request->phone;
        $inquiries->brand = $request->brand;
        $inquiries->model = $request->model;
        $inquiries->issue = $request->issue;
        $inquiries->time = $request->time;
        $inquiries->price = $request->price;
        $inquiries->update();

        $notification = array (
            'message' => 'Inquiry Data Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.van.index')->with($notification);
    }

    /**
     * RemoVe the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquiries = van::findOrFail($id);
        $inquiries->delete();
        $notification = array (
            'message' => 'Inquiry Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.van.index')->with($notification);
    }
    //for check status
    public function chkStatus(Request $request, $id){
        $inquiries = van::findOrFail($id);
        if($inquiries->status == 0){
            $inquiries->status++;
        }
        else{
            $inquiries->status--;
        }
        $inquiries->update();
        return redirect()->route('admin.van.index', compact('inquiries'));
    }
}
