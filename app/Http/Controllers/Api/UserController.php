<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function showUser($id){
        return User::find($id);
    }

    public function editUser($id){
        
 
         
        $user = User::find($id);
  

        $user->fill(Input::all())->save();

        return Input::all();
    }
    
}
