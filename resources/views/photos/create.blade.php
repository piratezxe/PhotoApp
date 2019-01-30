@extends('layouts.app')
@section('content')



@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card col-md-auto">
    <div class="card-body">
        <form action="{{ route('photos.store') }}" method="POST">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Opis</label>
                <input type="text" name="description" class="form-control" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input  value="{{ csrf_token() }}" type="file" name="image" class="form-control-file">
            </div>
            <a href="{{ url('/showUserById') }}" class="btn btn-info pull-right"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection