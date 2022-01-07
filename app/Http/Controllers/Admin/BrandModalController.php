<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Admin\BrandModal;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;

class BrandModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modals = BrandModal::paginate(5);
        $brands = Brand::all();
        return view('admin.modal.index', compact('modals', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'brand' => 'required',
            
        ]);

        $modals = new BrandModal();
        if(request()->hasFile('modal_img')){
            $image =  File::uploadFile(request()->file('modal_img'));
            $modals->modal_img = $image->id;
        }
        $modals->brand_id = $request->brand;
        $modals->name = $request->modal_name;
        $modals->save();

        $notification = array(
            'message' => 'Modal Add Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
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
        $modals = BrandModal::findOrFail($id);
        $brands = Brand::all();
        return view('admin.modal.edit', compact('modals', 'brands'));
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
        $validated = $request->validate([
            'brand' => 'required',
            
            
        ]);

        $modals =  BrandModal::find($id);
                
        if(request()->hasFile('modal_img')){

            $oldimg = File::where('id', $modals->modal_img)->get();
            foreach($oldimg as $img){
            File::deleteFile($img);
            $img->delete();
            }

            $image = File::uploadFile(request()->file('modal_img'));
            $modals->modal_img =  $image->id;

        }
            $modals->brand_id = $request->brand;       
            $modals->name = $request->modal;
            $modals->update();

            $notification = array(
                'message' => 'Modal Update Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('admin.modals.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modals = BrandModal::find($id);
        $oldimg = File::where('id', $modals->modal_img)->get();
                foreach($oldimg as $img){
                    File::deleteFile($img);
                    $img->delete();
                }
        $modals->delete();

        $notification = array (
            'message' => 'Modal Data Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.modals.index')->with($notification);
    }

}
