<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blogs'=>Blog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'mimes:jpg,jpeg,png,webp,tiff'
            ]);
            Blog::newBlog($request);
            return back()->with('message','Blog Add Successfully.');
        }
        catch (Exception $e){
            return back()->with('message',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        if($blog){
            return view('admin.blog.show',[
                'blog'=>$blog,
            ]);
        }
        else{
            return back()->with('message','Blog Not Found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if($blog){
            return view('admin.blog.edit',[
                'blog'=>$blog,
            ]);
        }
        else{
            return back()->with('message','Blog Not Found');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        try {
            $this->validate($request,[
                'title'=>'required',
                'image'=>'mimes:jpg,jpeg,png,webp,tiff'
            ],[
                'title.required'=>'Name is required',
            ]);
            Blog::updateBlog($request,$blog->id);
            return redirect()->route('blogs.index')->with('message','Blog Update Successfully.');
        }
        catch (Exception $e){
            return back()->with('message',$e->getMessage());
        }
    }
    public function updateStatus(Request $request,$id){
        Blog::updatePublishedStatus($request,$id);
        return back()->with('message',"update status success.");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::deleteBlog($blog->id);
        return back()->with('message',"delete blog success.");
    }
}
