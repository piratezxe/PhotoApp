<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    //display list of resources
    public function index(){
        return view('app');
    }

    //show created form
    public function create()
    {
        return view('photo.create');
    }

    //store a newly created resources in storage
    public function store(Request $request)
    {
    }

    public function show(Photos $photos)
    {

    }

    public function edit(Photos $photos)
    {

    }

    public  function update(Request $request, Photos $photos)
    {

    }

    public function destroy(Photos $photos)
    {

    }
}
