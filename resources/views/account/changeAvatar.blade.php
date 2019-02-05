@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
        <form action="{{ route('avatar.update', $user->id)}}" method="post">
                @csrf
                @method('PATCH')
                <img class="card-img-top"  src={{"https://imageexample.blob.core.windows.net/container-example/" .$user->avatar }} />
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <a class="btn btn-outline-primary">Click to select photo<input  type="file" name="photo" class="custom-file-input"></a>
                </div>
        <button class="btn btn-danger" type="submit">Save</button>
    </form>
</div>
@endsection
