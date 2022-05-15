<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\News;
use App\Models\Students;
use App\Models\Pages;
use App\Models\Sliders;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $events = Events::all();
        $sliders = Sliders::all();
        $news = News::where('is_featured', true)->orderBy('created_at', "desc")->limit(4)->get();
        $pageInfo = Pages::where('page_slug', 'home')->get();
        return view('frontend.index', compact('events', 'news', 'pageInfo', 'sliders'));
    }

    public function events()
    {
        $events = Events::all();
        $pageInfo = Pages::where('page_slug', 'event')->get();
        return view('frontend.events.index', compact('events', 'pageInfo'));
    }

    public function viewEvent($id)
    {
        $event = Events::find($id);
        return view('frontend.events.view', compact('event'));
    }
    public function players()
    {
        $players = Students::all();
        $pageInfo = Pages::where('page_slug', 'player')->get();
        return view('frontend.players.index', compact('players', 'pageInfo'));
    }
    public function playerProfile($id)
    {
        $player = Students::find($id);
        return view('frontend.players.profile', compact('player'));
    }
    public function leaderboard()
    {

        $pageInfo = Pages::where('page_slug', 'leader')->get();
        $leaderboards = Students::orderBy('top_pitch_velocity', 'DESC')->get();
        // dd($leaderboards);
        return view('frontend.leaderboard.index', compact('leaderboards', 'pageInfo'));
    }
    public function blogs()
    {
        $pageInfo = Pages::where('page_slug', 'news')->get();
        return view('frontend.blogs.index', compact('pageInfo'));
    }
    public function viewBlogs($id)
    {
        $blog = News::find($id);
        $recentNews = News::orderBy('created_at', "desc")->limit(6)->get();
        return view('frontend.blogs.view', compact('blog', 'recentNews'));
    }
}
