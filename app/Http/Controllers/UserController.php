<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
    foreach ($users as $user) {
        $user->posts;
    }
    return view('starter', ['users' => $users->toArray(),
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $users = User::all();
     return view('users/create');   
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
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phonenumber'=>$data['phonenumber'],
        'birthday' => $data['birthday'],
        'role' =>$data['role'],
        'password' => bcrypt('123456'),
    ]);
    return redirect()->route('index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $user = User::find($id);
    return view('users/show', [
        'users' => $user
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
    $user = User::find($id);
    return view('users/update', [
        'user' => $user
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
    $user = User::find($id);
    $user->update([
        'name' => $request->name,
        'birthday' => $request->birthday,
        'email' => $request->email,
        'phonenumber' =>$request->phonenumber,
        'role' => $request->role,
    ]);
    return redirect()->route('index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $user = User::find($id);
        
        $user->delete();
    
    return redirect()->route('index');
    }
}