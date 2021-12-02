<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(5);
        return view('admin.brands.index', compact('brands'));
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
            'brand' => 'required|unique:brands|min:2',
            'brand_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        if(request()->hasFile('brand_img')){
            $image =  File::uploadFile(request()->file('brand_img'));
           
        }

        $brands = new Brand();
        $brands->brand = $request->brand;
        $brands->brand_img = $image->id;
        $brands->save();

        $notification = array(
            'message' => 'Brand Add Successfully',
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
        $brands = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brands'));
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
            'brand' => 'required|min:2',
            'brand_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $brands =  Brand::find($id);
                
        if(request()->hasFile('brand_img')){

            $oldimg = File::where('id', $brands->brand_img)->get();
            foreach($oldimg as $img){
            File::deleteFile($img);
            $img->delete();
            }

            $image = File::uploadFile(request()->file('brand_img'));
            $brands->brand_img =  $image->id;

        }       
            $brands->brand = $request->brand;
            $brands->update();

            $notification = array(
                'message' => 'Brand Update Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('admin.brands.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::find($id);
        $oldimg = File::where('id', $brands->brand_img)->get();
                foreach($oldimg as $img){
                    File::deleteFile($img);
                    $img->delete();
                }
        $brands->delete();

        $notification = array (
            'message' => 'Brand Data Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('admin.brands.index')->with($notification);
    }
    
}
