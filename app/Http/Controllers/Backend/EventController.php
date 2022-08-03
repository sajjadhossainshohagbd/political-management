<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);

        return view('backend.home_page.event.index', compact('events'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return response([
            'view' => view('backend.home_page.event.edit', compact('event'))->render(),
        ]);
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->slug = Str::slug($request->name);
        $event->description = $request->description;
        $event->thumbnail = $request->file('thumbnail')->store('public/uploads/event_thumbnail');
        $event->date = $request->date;
        $event->save();

        Cache::forget('events');

        return back()->with('success', 'Event has been added!');
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->slug = Str::slug($request->name);
        $event->description = $request->description;
        $event->thumbnail = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('public/uploads/event_thumbnail') : $event->thumbnail;
        $event->date = $request->date;
        $event->save();

        Cache::forget('events');

        return back()->with('success', 'Event has been updated!');
    }

    public function delete($id)
    {
        Event::findOrFail($id)->delete();

        return back()->with('success','Event has been deleted!');
    }
}
