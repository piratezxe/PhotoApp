<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 18.01.2019
 * Time: 18:03
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function ChangePasswordController(){
        return view('auth.changepassword');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}