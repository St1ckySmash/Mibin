<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function user_show(): string
    {
        $users = User::paginate(10);
        dd($users);
        //$users = DB::table('users')->get();
        //return view('users', ['users'=>$users]);
        //return 'logging in passed successfully!';
    }
}
