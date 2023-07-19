@extends('layouts.app')

@section('title','Welcome')

@section('main-content')
    <div class="container-fluid content ">
        <div class="row justify-content-center my_container">
           @foreach ( $posts as $book )
                <div class="col p-1">
                    <div class="comics-card">
                        <div class="img-container">
                            <img src="{{$book['thumb']}}" alt="">
                            <p> {{substr($book['title'],0,20)}}</p>
                        </div>
                    </div>
                </div> 
           @endforeach 
        </div>
    </div>
@endsection