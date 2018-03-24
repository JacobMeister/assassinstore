<?php

namespace App\Http\Controllers;

use \Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        //check if user is admin 
        
        $this->loggedInUser = Auth::user();
        
        if(!$this->loggedInUser->admin){
            return redirect('/');
        } 
        //get all users from db
        $users = User::all();
        return view('cms.userList',['users' => $users]);
    }
    
    public function changeAdmin($id){
        //find clicked user and change admin
        $currentUser = User::find($id);
        if($currentUser->admin){
            $currentUser->admin = false;
        }
        else{
            $currentUser->admin = true;
        }
        $currentUser->save();
        return redirect('/cms/users');
    }
    //delete user
    public function destroy($id){
        User::destroy($id);
        return redirect('/cms/users');
    }
}
