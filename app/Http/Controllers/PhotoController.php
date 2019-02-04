<?php
namespace App\Http\Controllers;
use App\Photos;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::all();
        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required'
            ]);
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $path = $image->hashName();
                $description = $request['description'];
                $title = $request['title'];
                $user_id = Auth::user()->id;
                //Storage::disk('local')->put('public/images/', $image, 'public');
                Storage::disk('azure')->put('public/images/', $image);
                Photos::create(['title' => $title, 'desc' => $description, 'uri' => $path, 'user_id' =>  $user_id]);
            }
        return Redirect::to('/showUserById');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('photos.edit', ['id' => $id]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'desc'=>'required'
        ]);
        $photo = Photos::find($id);
        $title = $request->get('title');
        $desc = $request->get('desc');
        $photo->title = $title;
        $photo->desc = $desc;
        $photo->save();
        return Redirect::to('/showUserById');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Photos::find($id)->delete();
        return Redirect::to('/showUserById')->with('success', 'Stock has been deleted Successfully');;
    }
}
