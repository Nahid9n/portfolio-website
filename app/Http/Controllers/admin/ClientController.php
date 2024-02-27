<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Exception;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.client.index',[
            'clients'=>Client::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name'=>'required',
                'logo'=>'mimes:jpg,jpeg,png,webp'
            ],[
                'name.required'=> 'Client Name Is Required',
                'logo.mimes'=> 'Logo File Type Must Be jpg,jpeg,png,webp',
            ]);
            Client::newClient($request);
            return back()->with('message','New Client Add Successfully.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit',[
            'client'=>$client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        try {
            $this->validate($request,[
                'name'=>'required',
                'logo'=>'mimes:jpg,jpeg,png,webp'
            ],[
                'name.required'=> 'Client Name Is Required',
                'logo.mimes'=> 'Logo File Type Must Be jpg,jpeg,png,webp',
            ]);
            Client::updateClient($request,$client->id);
            return redirect()->route('clients.index')->with('message','Client Update Successfully.');
        }
        catch (Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }
    public function updateStatus(Request $request,$id){
        Client::updatePublishedStatus($request,$id);
        return back()->with('message',"update status success.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        Client::deleteClient($client->id);
        return back()->with('message',"delete client success.");
    }
}
