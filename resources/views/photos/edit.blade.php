@extends('layouts.app')
@section('content')

<div class="card col-md-auto">
    <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        <form action="{{ route('photos.update', $id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Tytul</label>
                <input name="title" type="text6" class="form-control"  placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Opis</label>
                <input name="desc" type="text" class="form-control" placeholder="Enter description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
