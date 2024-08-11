<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{

 function saveImage($request)
 {
    if($request->hasFile('logo'))
    {
        $image=$request->file('logo');
        $filePath=$image->store('track_images',"track_uploads");
        return $filePath;
    }
    return null;
 }

    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //
        $tracks=Track::orderBy('created_at',"desc")->paginate(5);
        // dd($tracks);
        return view('tracks.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // dd($request);
        //  validation on data
        $request->validate([
            'name'=>'required|unique:tracks|min:2',
            'about'=>'required|unique:tracks|min:10|max:25'
        ],[
            'name.unique'=>"this track name already exist",
            'name.min'=>"track name must be more than 2",
            'about.unique'=>'this track description  already exist'
        ]

    );

        // dump($request);
        $logoPath=$this->saveImage($request);
        // dump($request);
        $requestData=$request->all();
        // dump($requestData);
        $requestData['logo']=$logoPath;
        dd($requestData);
        $track=Track::create($requestData);
        return to_route('tracks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
        // find or fail(id) => check => exist => object
        // if not exist => 404 not found
        // dd($track);
        return view('Tracks.show',compact('track'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
        return view('tracks.edit',compact('track'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
        dd($track,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
        $track->delete();
        // handle delete image
        return to_route('tracks.index');

    }
}
