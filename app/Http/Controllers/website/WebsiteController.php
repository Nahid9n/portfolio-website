<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Exception;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'sliders'=>Slider::where('status',1)->latest()->get(),
            'services'=>Service::where('status',1)->latest()->get(),
            'clients'=>Client::where('status',1)->latest()->get(),
            'team1'=>Team::where('status',1)->latest()->first(),
            'team2'=>Team::where('status',1)->latest()->skip(1)->first(),
            'team3'=>Team::where('status',1)->latest()->skip(2)->first(),
            'team4'=>Team::where('status',1)->latest()->skip(3)->first(),
        ]);
    }
    public function service(){
        return view('website.service.index',[
            'services'=>Service::where('status',1)->latest()->get(),
            'clients'=>Client::where('status',1)->latest()->get(),
        ]);
    }
    public function portfolio(){
        return view('website.portfolio.index');
    }
    public function blog(){
        return view('website.blog.index');
    }
    public function blogDetails(){
        return view('website.blog.details');
    }
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index',[
            'contact'=>Contact::first(),
        ]);
    }
    public function contactMessage(Request $request){
        try {
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',
            ],[
                'name.required'=>'Name Field Is Required',
                'email.required'=>'Email Field Is Required',
                'message.required'=>'Message Field Is Required',
            ]);
            $contact = new ContactMessage();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();
            return back()->with('message','send message successfully.');
        }
        catch (Exception $e){
            return back()->with('warning',$e->getMessage());
        }
    }
    public function contactMessages(){
        return view('admin.contact-message.contact-message',[
            'messages'=>ContactMessage::all(),
        ]);
    }
    public function contactMessageShow($id){
        return view('admin.contact-message.contact-message-show',[
            'message'=>ContactMessage::find($id),
        ]);
    }


}
