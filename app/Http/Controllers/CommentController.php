<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments=Comment::all();
        // foreach ($posts as $post) 
        //     {
        //         $post->user;
        //      }
        return view('comment',[
        'comments'=>$comments->toArray(),
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $comment = Comment::all();
     return view('comments/create');
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
    $comment = Comment::create([
        'post_id' => $data['post_id'],
        'content' => $data['content'],
        'user_id' =>$data['user_id'],
        'is_active' => $data['is_active'],
    ]);
    return redirect()->route('comments.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $comment = Comment::find($id);
    return view('comments/show', [
        'comments' => $comment
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
    $comment = Comment::find($id);
    return view('comments/update', [
        'comment' => $comment
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
    $comment = Comment::find($id);
    $comment->update([
        'post_id' => $request->post_id,
        'content' => $request->content,
        'user_id' => $request->user_id,
        'is_active' =>$request->is_active,
    ]);
    return redirect()->route('comments.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $comment = Comment::find($id);
        
    $comment->delete();
    
    return redirect()->route('comments.index');
    }
}