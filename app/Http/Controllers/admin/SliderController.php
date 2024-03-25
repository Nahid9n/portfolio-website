<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Exception;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.setting.slider.index',[
            'sliders'=>Slider::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'required | dimensions:width=1920,height=684 | mimes:jpg,png,jpeg,gif,svg',
            ],[
                'title.required'=>'title Required',
                'image.required'=>'image Required',
                'image.dimensions'=>'Image must be 1920*684',
                'image.mimes'=>'image jpg,png,jpeg,gif,svg Required',
            ]);
            Slider::newSlider($request);
            return back()->with('message','Create Slider Info Success');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.setting.slider.edit',[
            'slider'=>Slider::find($slider->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'dimensions:width=1920,height=684 | mimes:jpg,png,jpeg,gif,svg',
            ],[
                'title.required'=>'title Required',
                'image.dimensions'=>'Image must be 1920*684',
                'image.mimes'=>'image jpg,png,jpeg,gif,svg Required',
            ]);
            Slider::updateSlider($request,$slider->id);
            return redirect()->route('slider.index')->with('message','Update Slider Info Success.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }

    }
    public function updateStatus(Request $request,$id){
        Slider::updatePublishedStatus($request,$id);
        return back()->with('message',"update status success.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        Slider::deleteSlider($slider->id);
        return back()->with('message','Delete Slider Info Success.');
    }
}
