<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        // foreach ($posts as $post) 
        //     {
        //         $post->user;
        //      }
        return view('category',[
        'categories'=>$categories->toArray(),
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $category = Category::all();
     return view('categories/create');
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
    $category = Category::create([
        'user_id' =>$data['user_id'],
        'name' => $data['name'],
    ]);
    return redirect()->route('categories.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $category = Category::find($id);
    return view('categories/show', [
        'categories' => $category
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
    $category = Category::find($id);
    return view('categories/update', [
        'category' => $category
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
    $category = Category::find($id);
    $category->update([
        'user_id' => $request->user_id,
        'name' => $request->name,
    ]);
    return redirect()->route('categories.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $category = Category::find($id);
        
    $category->delete();
    
    return redirect()->route('categories.index');
    }
}