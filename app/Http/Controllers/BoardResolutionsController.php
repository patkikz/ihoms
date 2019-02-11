<?php

namespace App\Http\Controllers;

use App\BoardResolution;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use Alert;

class BoardResolutionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth' , 'checkuserrole'], ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resolutions = BoardResolution::orderBy('created_at','desc')->paginate(4);

     
        return view('board-resolutions.index', compact('resolutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('board-resolutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('file'))
        {
            //Get filename with extension

            $filenameWithExt = $request->file('file')->getClientOriginalName();

            //Get jusy file name

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension

            $extension = $request->file('file')->getClientOriginalExtension();

            // Filename to 
            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload

            $path = $request->file('file')->storeAs('public/cover_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post

        $request = request()->validate(
            [
                'title' => 'required',
                'file' => 'required|image|nullable|max:1999',
                'description' => 'required',
            ]);

        $request['uploader'] = auth()->id();
        $request['file'] = $fileNameToStore; 
        
        BoardResolution::create($request);

        return redirect('/board-resolutions')->with('success', 'Board Resolution Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardResolution  $boardResolution
     * @return \Illuminate\Http\Response
     */
    public function show(BoardResolution $boardResolution)
    {
        return view('board-resolutions.show', compact('boardResolution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardResolution  $boardResolution
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardResolution $boardResolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardResolution  $boardResolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardResolution $boardResolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardResolution  $boardResolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardResolution $boardResolution)
    {
        //
    }
}
