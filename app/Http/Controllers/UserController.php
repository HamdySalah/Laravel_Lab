<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index(){
        $users = User::all('*');
        return view('users.index',compact('users'));
    }
    public function show($id){
        $user = User::findorfail($id);
        return view('users.show',compact('user'));
    }
    public function create(){
        return view('users.create')->with('success','Create User Success'); 
    }
    public function store(StoreUser $request){
/*         $request->validate([
            'name'=>'required|min:3',
            'email'=>'requied|email|unique:users'
            ,'password'=>'required|min:8'
        ]); */
/*         $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user ->save(); */
        User::create($request->all());
        return redirect()->route('users.index')->with('success','User Stored Successfuly');
    }
    public function edit($id){
        $user = User::findorfail($id);
        return view('users.edit',compact('user'));
    }
    public function update(UpdateUser $request,$id){
        if($request->password){
            $data['password']=$request->password;
        }
/*         $user->name = $request->name;
        $user->email = $request->email; 
        if($request->password){
            $user->password = $request->password; 
        }
        $user ->save(); */
        return redirect()->route('users.index')->with('success','Update User Success');
    }
    public function destroy($id){
        $users = User::findorfail($id);
        $users -> delete();
        return redirect()->route('users.index')->with('success','Delete User Success');  
    
    }
}
