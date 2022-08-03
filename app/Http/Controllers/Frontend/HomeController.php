<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Biography;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $events = Cache::rememberForever('events', function () {
            return Event::latest()->get();
        });

        $biographies = Cache::rememberForever('biographies', function () {
            return Biography::all();
        });

        return view('frontend.index',compact('events','biographies'));
    }

    public function events()
    {
        $events = Event::latest()->paginate(12);
        return view('frontend.event.index',compact('events'));
    }

    public function eventDetails($slug,$id){
        $event = Event::where('slug',$slug)->where('id',$id)->firstOrFail();
        return view('frontend.event.details',compact('event'));
    }

    public function galleries(){
        $galleries = Gallery::latest()->paginate(14);
        return view('frontend.gallery.index',compact('galleries'));
    }
}
