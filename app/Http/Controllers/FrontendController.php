<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\News;
use App\Models\Students;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $events = Events::all();
        $news = News::where('is_featured',true)->orderBy('created_at',"desc")->limit(4)->get();
        return view('frontend.index', compact('events', 'news'));
    }

    public function events()
    {
        $events = Events::all();
        return view('frontend.events.index', compact('events'));
    }

    public function viewEvent($id)
    {
        $event = Events::find($id);
        return view('frontend.events.view', compact('event'));
    }
    public function players()
    {
        $players = Students::all();
        return view('frontend.players.index',compact('players'));
    }
    public function playerProfile($id)
    {
        $player = Students::find($id);
        return view('frontend.players.profile',compact('player'));
    }
    public function leaderboard()
    {
        $leaderboards = Students::orderBy('top_pitch_velocity','DESC')->get();
        // dd($leaderboards);
        return view('frontend.leaderboard.index',compact('leaderboards'));
    }
    public function blogs()
    {
        return view('frontend.blogs.index');
    }
    public function viewBlogs($id)
    {
        $blog = News::find($id);
        $recentNews = News::orderBy('created_at',"desc")->limit(6)->get();
        return view('frontend.blogs.view', compact('blog','recentNews'));
    }
}
