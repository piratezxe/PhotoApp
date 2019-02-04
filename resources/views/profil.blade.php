@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                    <img style="border-radius: 50%; width:100%;max-width:200px" src={{"https://imageexample.blob.core.windows.net/container-example/" .$users->avatar }} />
            </div>
            <div class="col-lg-8 col-md-6">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Username
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        {{$users->name}}
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Email
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        {{$users->email}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @if(\Illuminate\Support\Facades\Auth::id() == $users->id)
            <a href="{{ route('photos.create') }}">
                <button type="button" class="btn btn-outline-primary">
                    Add photo
                </button>
            </a>
        @endif
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-lg-3 col-sm-12 col-md-6">
                        <div style="mx-auto" class="row card" style="width: 18rem;"> 
                            <img class="card-img-top" src={{"https://imageexample.blob.core.windows.net/container-example/public/images/" .$photo->uri }}/>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$photo->title}}
                                </h5>
                                <p>
                                    {{$photo->desc}}
                                </p>
                                <div style="display:flex"  class="photoEditButton">
                                    <a href="{{ route('photos.edit', $photo->id ) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('photos.destroy', $photo->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
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
    </div>
</div>
@endsection
