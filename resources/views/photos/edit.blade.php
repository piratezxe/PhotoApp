@extends('layouts.app')
@section('content')

<div class="card col-md-auto">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Tytul</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Opis</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
