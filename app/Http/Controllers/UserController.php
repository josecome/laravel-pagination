<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home(){
    $user=User::paginate(10);
    return view('home', compact('user'));
}
}
