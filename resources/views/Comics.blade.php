@extends('layout.app')


@section('main-content')

<div class="copertine">
    <h1 class="fum">Fumetti</h1>
    <div class="row g-2">
        @foreach($Comics as $Comic )
        <div class="col-2">
            <div class="card m-3">
                <img src="{{$Comic['thumb']}}" class="img-fluid comicImg " alt="{{$Comic['series']}}">
                <p>{{$Comic['series']}}</p>
            </div>
        </div>

        @endforeach
    </div>

    <div class="d-flex justify-content-center  mb-4">
        <button class="btn btn-primary ">LOAD MORE</button>
    </div>
</div>
@endsection