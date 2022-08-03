<?php

namespace App\Http\Controllers\Backend;

use App\Models\Biography;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class BiographyController extends Controller
{
    public function index()
    {
        $biographies = Biography::latest()->paginate(10);

        return view('backend.home_page.biography.index', compact('biographies'));
    }

    public function edit($id)
    {
        $biography = Biography::findOrFail($id);

        return response([
            'view' => view('backend.home_page.biography.edit', compact('biography'))->render(),
        ]);
    }

    public function store(Request $request)
    {
        $biography = new Biography();
        $biography->title = $request->title;
        $biography->description = $request->description;
        $biography->date = $request->date;
        $biography->save();

        Cache::forget('biographies');

        return back()->with('success', 'Biography has been added!');
    }

    public function update(Request $request, $id)
    {
        $biography = Biography::findOrFail($id);
        $biography->title = $request->title;
        $biography->description = $request->description;
        $biography->date = $request->date;
        $biography->save();

        Cache::forget('biographies');

        return back()->with('success', 'Biography has been updated!');
    }

    public function delete($id)
    {
        Biography::findOrFail($id)->delete();

        return back()->with('success','Biography has been deleted!');
    }
}
