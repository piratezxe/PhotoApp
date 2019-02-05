<?php
namespace App\Http\Controllers;
use App\Photos;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    public function index()
    {
        return view('account.changeAvatar', ['user' => Auth::user()]);
    }


    public function create()
    {
        return view('account.changeAvatar', ['user' => Auth::user()]);
    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        return view('account.changeAvatar', ['user' =>Auth::user()]);
    }


    public function update(Request $request)
    {
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $path = $image->hashName();
            Storage::disk('azure')->put('public/images/', $image);
            DB::update('update users set avatar = '.$path.'where id = '.$Auth::user()->id);
        }
        return Redirect::to('/showUserById');
    }


    public function destroy($id)
    {

    }
}
