<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Comment;
use App\Models\JobPost;
use App\Models\OurClient;
use App\Models\OurService;
use App\Models\OurTeam;
use App\Models\OurWork;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Vision;
use App\Models\WhyUs;
use App\Services\InstagramService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $clients = OurClient::get();
        $services = OurService::get();
        $slider = Slider::first();
        $visions = Vision::get();
        $works = OurWork::get();
        $statistics = Statistic::get();
        $infs = Team::get();
        $certificates = Certificate::get();
        $blogs = Blog::orderBy('id','desc')->limit(2)->get();
        $whyU = WhyUs::first();

        return view('site.home',compact('about','clients','services',
        'slider','visions','works','statistics','infs','blogs','certificates','whyU'));
    }

    public function service()
    {
        $services = OurService::get();
        $blogs = Blog::orderBy('id','desc')->limit(2)->get();

        return view('site.services',compact('services','blogs'));
    }

    public function service_details(OurService $service)
    {
        $services = OurService::get();
        return view('site.services_details',compact('service','services'));
    }

    public function about()
    {
        $about = About::first();
        $our_teams = OurTeam::get();
        return view('site.about',compact('about','our_teams'));
    }

    public function influencers()
    {
        $infs = Team::get();
        return view('site.influencers',compact('infs'));
    }

    public function influencers_details(Team $team)
    {
        $inf = $team;
        return view('site.influencers_details',compact('inf'));
    }

    public function portfolio()
    {
        $works = OurWork::get();
        $tags = Tag::get();
        return view('site.portfolio',compact('works','tags'));
    }

    public function portfolio_details(OurWork $work)
    {
        $previousWork = OurWork::where('id', '<', $work->id)->orderBy('id', 'desc')->first();
        $nextWork = OurWork::where('id', '>', $work->id)->orderBy('id', 'asc')->first();

        return view('site.portfolio_details',compact('work','previousWork','nextWork'));
    }



    public function blog()
    {
        $blogs = Blog::get();
        return view('site.blog',compact('blogs'));
    }

    public function blog_details(Blog $blog)
    {
        $latest = Blog::where('id', '<>', $blog->id)
                    ->orderBy('id','desc')
                    ->limit(3)
                    ->get();
        $comments = $blog->comments;
        return view('site.blog_details',compact('blog','latest','comments'));
    }

    public function add_comment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->message = $request->message;
        $comment->blog_id = $request->blog_id;
        $comment->save();
        return redirect()->back();
    }

    public function job()
    {
        $jobs = JobPost::all();
        return view('site.jobs',compact('jobs'));
    }

    public function contact()
    {
        return view('site.contact');
    }

}