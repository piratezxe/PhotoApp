<?php
namespace App\Http\Controllers;
use Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

    public function getCurrentUser($id)
    {
        if($id == Null)
        {
            return Auth::user();
        }else
        {
            return User::find($id);
        }
        return currentUser;
    }
    public function showUserById($id = null)
    {
        $users = $this->getCurrentUser($id);

        $userPhotos = DB::table('photos')->where('user_id', $users->id)->get();

        return view('profil', ['users' => $users, 'photos' => $userPhotos]);
    }
    public static function show()
    {
        $users = DB::table('users')->get();
        return view('users', ['users' => $users]);
    }
    public static function filter($id)
    {
        $users = DB::table('users')->where('name', "{$id}")->get();
        return view('user', ['users' => $users]);
    }
}
