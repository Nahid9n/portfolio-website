<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mockery\CountValidator\Exception;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.service.index',[
            'services'=>Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name'=>'required | unique:services,name',
                'icon'=>'mimes:jpg,jpeg,png,webp,tiff'
            ]);
            Service::newService($request);
            return back()->with('message','Service Add Successfully.');
        }
        catch (Exception $e){
            return back()->with('message',$e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',[
            'service'=>$service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        try {
            $this->validate($request,[
                'name'=>'required',Rule::unique('services')->ignore($service->id),
                'icon'=>'mimes:jpg,jpeg,png,webp,tiff'
            ],[
                'name.required'=>'Name is required',
                'name.unique'=>'Already have this name.',
            ]);
            Service::updateService($request,$service->id);
            return redirect()->route('services.index')->with('message','Service Update Successfully.');
        }
        catch (\Exception $e){
            return back()->with('message',$e->getMessage());
        }

    }
    public function updateStatus(Request $request,$id){
        Service::updatePublishedStatus($request,$id);
        return back()->with('message',"update status success.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Service::deleteService($service->id);
        return back()->with('message',"delete service success.");
    }
}
