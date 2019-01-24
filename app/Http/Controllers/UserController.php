<?php
/**
 * Created by PhpStorm.
 * User: rusek
 * Date: 22.01.2019
 * Time: 17:43
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Rainwater\Active\Active;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    public static function show()
    {
        $users = DB::table('users')->get();
        return view('user', ['users' => $users]);
    }
    public static function filter($id)
    {
        $users = DB::table('users')->where('name', "{$id}")->get();
        return view('user', ['users' => $users]);
    }
    public static function online()
    {
        $users = Active::users();
        return view('user', ['users' => $users]);
    }
    public static function profil($id)
    {
        $users = DB::table('users')->where('name', "{$id}")->get()->first();
        return view('profil', ['users' => $users]);
    }
    public static function yourprofil()
    {
        $users = Auth::user();
        return view('profil', ['users' => $users]);
    }
}
