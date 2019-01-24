<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    //display list of resources
    public function index(){
        return view('app');
    }

    //show created form
    public function create(){


    }

    //store a newly created resources in storage
    public function store(Request $request)
    {
        if($request->file('input_img')->isValid()) {
            try {
                $file = $request->file('input_img');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('input_img')->move("fotoupload", $name);
            } catch (Illuminate\Filesystem\FileNotFoundException $e) {

            }
            return back()->with('success','Image Upload successfully');
        }
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
