@extends('layouts.app')

@section('content')
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Plec
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Men</a>
                        <a class="dropdown-item" href="#">Women</a>
                        <a class="dropdown-item" href="#">Pair</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Biala Podlaska" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"type="submit" href="" class="btn btn-default">
                    Szukaj
                </button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-4 col-sm-12">
                <div class="row card" style="width: 18rem;"> <img class="card-img-top" src={{"https://imageexample.blob.core.windows.net/container-example/".$user->avatar}}  width="200" height="200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$user->name}}
                        </h5>
                        <a class="btn-danger" href="{{ url('showUserById', $user->id)}}">Click to visit profile</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div>
        <div class="row">
        @endif
        @endforeach
    </div>
    </div>
</div>
@endsection
