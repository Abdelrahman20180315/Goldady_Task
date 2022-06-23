<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        return view('Users.home');
    }
    public function redirects()
    { if(Auth::id())
        {
            if(Auth::user()->usertype == '1')
            {
                $users = User::all();
                return view('Admins.users',compact('users'));
            }
            else
            {
                return view('Users.home');
            }
        }
        else
        {
            return view('Users.home');
        }
    }
    
    // public function user_issues()
    // {
    //     $data = Issues::where('user_id',Auth::id())->where('status','confirmed')->get();
    //     return view('Users.user_issues',compact('data'));
    // }
}
