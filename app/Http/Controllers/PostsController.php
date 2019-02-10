<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Events\PostCreated;
use DB;
use Alert;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' , 'checkuserrole'], ['except' => ['index','show', 'create', 'store']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::orderBy('title','desc')->take(1)->get();
        // $posts = Post::all();
        // $posts = Post::orderBy('title','desc')->get();

        $posts = Post::orderBy('created_at','desc')->paginate(4);

     
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
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
            'content' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image'))
        {
            //Get filename with extension

            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get jusy file name

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // Filename to 
            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;

        $post->save();

        event(new PostCreated($post));  
        

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $post = Post::find($id);
        // if ($post->user_id !== auth()->id()) {
        //     abort(403);
        //  }
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/posts')->with('error', 'Unauthorized Page');    
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

         //Handle File Upload
         if($request->hasFile('cover_image'))
         {
             //Get filename with extension
 
             $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
 
             //Get jusy file name
 
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
 
             //Get just extension
 
             $extension = $request->file('cover_image')->getClientOriginalExtension();
 
             // Filename to 
             
             $fileNameToStore = $filename.'_'.time().'.'.$extension;
 
             // Upload
 
             $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
         }

        // Update Post

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        
        if($request->hasFile('cover_image'))
        {
            $post->cover_image = $fileNameToStore;
        }

        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
         //Check for correct user
         if(auth()->user()->id !== $post->user_id)
         {
             return redirect('/posts')->with('error', 'Unauthorized Page');    
         }

         if($post->cover_image != 'noimage.jpg')
         {
             //DELETE IMAGE
            Storage::delete('public/cover_images/'.$post->cover_image);
         }

        $post->delete();

        return redirect('/posts')->with('success', 'Post Removed');
    }
}
