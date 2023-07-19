@extends('layouts.app')

@section('title','Welcome')

@section('main-content')
    <h1>
        Welcome
    </h1>
    <div class="container">
        <div class="row">
           @foreach ( $posts as $book )
                <div class="col-3 p-2">
                    <img src="{{$book['thumb']}}" alt="">
                    <p>prova</p>
                </div> 
           @endforeach 
        </div>
    </div>
@endsection