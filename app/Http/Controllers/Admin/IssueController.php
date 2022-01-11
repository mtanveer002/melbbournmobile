<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\BrandModal;
use App\Models\Admin\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::paginate(5);

        return view('admin.issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $issues = Issue::all();
        $brands = Brand::all();
        $modals = BrandModal::all();
        return view('admin.issues.create', compact('brands', 'modals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issues = new Issue();
        $issues->brand_id = $request->brand;
        $issues->modal_id = $request->modal;
        $issues->issue = $request->issue;
        $issues->price = $request->price;
        $issues->description = $request->description;
        $issues->save();

        $notification = array (
            'message' => 'Brand Data Add Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.issues.index')->with($notification);
        

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
        $brands = Brand::all();
        $modals = BrandModal::all();
        $issues = Issue::findOrFail($id);

        return view('admin.issues.edit', compact('issues', 'brands', 'modals'));
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
        $issues = Issue::findOrFail($id);
        $issues->brand_id = $request->brand;
        $issues->modal_id = $request->modal;
        $issues->issue = $request->issue;
        $issues->price = $request->price;
        $issues->description = $request->description;
        $issues->update();

        $notification = array (
            'message' => 'Brand Data Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.issues.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $issues = Issue::findOrFail($id);
        $issues->delete();

        $notification = array (
            'message' => 'Brand Data Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.issues.index')->with($notification);
    }

    public function getModals($brand)
    {
        $modals = BrandModal::where('brand_id', $brand)->get();
        return json_encode($modals);
    }
}
