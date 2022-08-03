<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);

        return view('backend.galleries.index', compact('galleries'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        return response([
            'view' => view('backend.galleries.edit', compact('gallery'))->render(),
        ]);
    }

    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->type = $request->type;
        $gallery->title = $request->title;
        $gallery->photo = $request->photo->store('public/uploads/galleries');
        $gallery->link = $request->link;
        $gallery->save();


        return back()->with('success', 'Gallery has been added!');
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        if($request->hasFile('photo')){
            $gallery->photo = $request->photo->store('public/uploads/galleries');
        }
        $gallery->link = $request->link;
        $gallery->save();

        return back()->with('success', 'Gallery has been updated!');
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);

        @unlink(public_path($gallery->photo));
        $gallery->delete();

        return back()->with('success','Gallery has been deleted!');
    }
}
