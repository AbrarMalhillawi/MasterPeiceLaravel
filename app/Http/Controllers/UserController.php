<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        // return $users ;
        return view('admin.users.index' , compact('users'));
            
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));

        // insert user
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->role = $request->role;
        $users->address = $request->address;
        $users->password = Hash::make($request->password);
        // $users->password =$request->password;
        $users->User_Image = $user_img;
        $users->save();
        return redirect('user');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
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
        if (! $user) {
            return redirect('user');
        }
        // return view('admin.users.update',compact('user'));
        return view('user.editProile',compact('user'));
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        // $user->password = $request->password;
        // $user->User_Image = $user_img;
        if ($request->hasFile('image')) {
            $user_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/userimage',$user_img);
            $user->User_Image = $user_img;
        }
        // $user->role = $request->role;
        $user->save();

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findorfail($id);
        $user->delete(); 
        return redirect()->route('user.index');
        // return view('admin.users.index',compact('users'));
    
    }
}
