@extends('layout.app')


@section('main-content')
<h1>Fumetti</h1>
<div class="row">@foreach($Comics as $Comic )
    <div class="col-3">
        <div class="card">
            <img src="{{$Comic['thumb']}}" class="card-img-top" alt="{{$Comic['series']}}">
        </div>
    </div>

    @endforeach
</div>

@endsection