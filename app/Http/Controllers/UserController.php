<?php
namespace App\Http\Controllers;
use Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{

    public function getCurrentUser($id)
    {
        if($id == Null)
        {
            return Auth::user();
        }
        $user = User::find($id);
        return currentUser;
    }
    public function showUserById($id = null)
    {
        $users = $this->getCurrentUser($id);
        return view('profil', ['users' => $users]);
    }
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
