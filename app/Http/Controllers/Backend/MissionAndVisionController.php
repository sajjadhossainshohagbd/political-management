<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\MissionAndVision;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class MissionAndVisionController extends Controller
{
    public function index()
    {
        $missions = MissionAndVision::latest()->paginate(10);

        return view('backend.home_page.mission_and_vision', compact('missions'));
    }

    public function edit($id)
    {
        $mission = MissionAndVision::findOrFail($id);

        return response([
            'view' => view('backend.home_page.edit_mission_vision', compact('mission'))->render(),
        ]);
    }

    public function store(Request $request)
    {
        $mission_vision = new MissionAndVision();
        $mission_vision->type = $request->type;
        $mission_vision->title = $request->title;
        $mission_vision->description = $request->description;
        $mission_vision->percentage = $request->percentage;
        $mission_vision->save();

        Cache::forget('mission_and_vision');

        return back()->with('success', 'Mission & Vision has been added!');
    }

    public function update(Request $request, $id)
    {
        $mission_vision = MissionAndVision::findOrFail($id);
        $mission_vision->type = $request->type;
        $mission_vision->title = $request->title;
        $mission_vision->description = $request->description;
        $mission_vision->percentage = $request->percentage;
        $mission_vision->save();

        Cache::forget('mission_and_vision');

        return back()->with('success', 'Mission & Vision has been updated!');
    }

    public function delete($id)
    {
        MissionAndVision::findOrFail($id)->delete();

        return back()->with('success','Data has been deleted!');
    }
}
