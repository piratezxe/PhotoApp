<?php
/**
 * Created by PhpStorm.
 * User: rusek
 * Date: 22.01.2019
 * Time: 17:43
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;


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
}
