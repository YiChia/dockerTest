<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test()
    {
        //phpinfo();
        $users = DB::table('users')->get();
        dd($users);
    }
}
