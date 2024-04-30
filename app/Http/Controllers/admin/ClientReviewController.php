<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;
use function Ramsey\Collection\offer;

class ClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.client-review.index',[
            'reviews'=>ClientReview::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client-review.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $review = new ClientReview();
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->review = $request->review;
        $review->status = $request->status;
        $review->user_id = auth()->user()->id;
        if ($request->file('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $directory = 'upload/client-review/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
            $review->image = $imageUrl;
        }
        $review->save();
        return back()->with('message','Save Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(ClientReview $clientReview)
    {
        return view('admin.client-review.show',[
            'review'=>$clientReview,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientReview $clientReview)
    {
        return view('admin.client-review.edit',[
            'review'=>$clientReview,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $review = ClientReview::find($id);
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->review = $request->review;
        $review->status = $request->status;
        $review->user_id = auth()->user()->id;
        if ($request->file('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $directory = 'upload/client-review/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
            if (file_exists($review->image)){
                unlink($review->image);
                $review->image = $imageUrl;
            }

        }
        $review->save();
        return redirect()->route('client-review.index')->with('message','Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = ClientReview::find($id);
        if (file_exists($review->image)){
            unlink($review->image);
        }
        $review->delete();
        return back()->with('message','Delete Successfully.');
    }
    public function updateStatus(Request $request,$id)
    {
        $review = ClientReview::find($id);
        $review->status = $request->status;
        $review->save();
        return back()->with('message','Status change Successfully.');
    }

}
