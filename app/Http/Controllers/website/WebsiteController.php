<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Category;
use App\Models\Client;
use App\Models\ClientReview;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Exception;

class WebsiteController extends Controller
{
    public function index(){
        $client = Client::where('status',1)->count();
        $projectCount = Project::where('status',1)->latest()->count();
        $services = Service::where('status',1)->latest()->take(4)->get();
        $serviceCount = Service::where('status',1)->latest()->count();
        $sliders =Slider::where('status',1)->latest()->get();
        $clients = Client::where('status',1)->latest()->get();
        $teamCount = Team::where('status',1)->latest()->count();
        $team1 = Team::where('status',1)->latest()->first();
        $team2 = Team::where('status',1)->latest()->skip(1)->first();
        $team3 = Team::where('status',1)->latest()->skip(2)->first();
        $team4 = Team::where('status',1)->latest()->skip(3)->first();
        $blogs = Blog::where('status',1)->latest()->get();
        $projects = Project::where('status',1)->latest()->paginate(6);

        return view('website.home.index',[
            'sliders'=>$sliders,
            'services'=>$services,
            'serviceCount'=>$serviceCount,
            'clients'=>$clients,
            'teamCount'=>$teamCount,
            'team1'=>$team1,
            'team2'=>$team2,
            'team3'=>$team3,
            'team4'=>$team4,
            'blogs'=>$blogs,
            'projects' => $projects,
            'projectCount' => $projectCount,
            'client' => $client,
        ]);
    }
    public function service(){
        return view('website.service.index',[
            'services'=>Service::where('status',1)->latest()->get(),
            'clients'=>Client::where('status',1)->latest()->get(),
        ]);
    }
    public function project(){
        $projects = Project::where('status',1)->latest()->paginate(18);
        $categories = Category::where('status',1)->latest()->get();
        return view('website.project.index',compact("projects","categories"));
    }
    public function projectDetails($slug){
        $projects = Project::where('status',1)->whereNotIn('slug',[$slug])->latest()->take(6)->get();
        $project = Project::where('slug',$slug)->where('status',1)->first();
//        $comments = BlogComment::where('blog_id',$blog->id)->get();
        return view('website.project.details',[
            'projects'=>$projects,
            'project'=>$project,
//            'comments'=>$comments,
        ]);
    }
    public function blog(){
        return view('website.blog.index',[
            'blogs'=> Blog::where('status',1)->latest()->paginate(20),
        ]);
    }
    public function team(){
        $teams = Team::where('status',1)->latest()->paginate(8);
        return view('website.team.index',compact('teams'));
    }
    public function blogDetails($slug){
        $blogs = Blog::where('status',1)->whereNotIn('slug',[$slug])->latest()->take(6)->get();
        $blog = Blog::where('slug',$slug)->where('status',1)->first();
        $tags = explode(',',$blog->meta_tags);
        $comments = BlogComment::where('blog_id',$blog->id)->get();
        return view('website.blog.details',[
            'blogs'=>$blogs,
            'blog'=>$blog,
            'tags'=>$tags,
            'comments'=>$comments,
        ]);
    }
    public function about(){
        $about      = About::where('status',1)->first();
        $services   = Service::where('status',1)->latest()->take(2)->get();
        $team1      = Team::where('status',1)->latest()->first();
        $team2      = Team::where('status',1)->latest()->skip(1)->first();
        $team3      = Team::where('status',1)->latest()->skip(2)->first();
        $team4      = Team::where('status',1)->latest()->skip(3)->first();
        $reviews     = ClientReview::where('status',1)->latest()->get();
        $projectCount = Project::where('status',1)->latest()->count();
        $serviceCount = Service::where('status',1)->latest()->count();
        $teamCount = Team::where('status',1)->latest()->count();
        $client = Client::where('status',1)->count();
        return view('website.about.index',compact('about','services','team1','team2','team3','team4','reviews','projectCount','serviceCount','teamCount','client'));
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
