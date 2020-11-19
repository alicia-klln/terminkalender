<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $table = 'users';

    public function index()
    {
        $userData = User::all();
    
        return view('events.index',compact('event'));
    }
    public function show($id)
    {
        $usersID = $id;
    
        return view('events.index',compact('usersID'));
    }
    
}
