<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        foreach ($posts as $post) 
            {
                $post->user;
             }
        return view('post',[
        'posts'=>$posts->toArray(),
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $post = Post::all();
     return view('posts/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $data = $request->all();
    $post = Post::create([
        'title' => $data['title'],
        'content' => $data['content'],
        'category_id' => $data['category_id'],
        'user_id' =>$data['user_id'],
    ]);
    return redirect()->route('posts.index');
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
    return view('posts/show', [
        'posts' => $post
    ]);
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
    return view('posts/update', [
        'post' => $post
    ]);
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
    $post = Post::find($id);
    $post->update([
        'title' => $request->title,
        'content' => $request->content,
        'category_id' =>$request->category_id,
        'user_id' => $request->user_id,
    ]);
    return redirect()->route('posts.index');
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
        
    $post->delete();
    
    return redirect()->route('posts.index');
    }
}