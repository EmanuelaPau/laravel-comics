@extends('layouts.app')

@section('title','Welcome')

@section('main-content')

<div class="jumbo">

</div>
<div class="content">
    <article class="container comics-card-container">

        <div class="section-title">
            <h1>current series</h1>
        </div>

        @foreach ( $posts as $book )
            <div class="comics-card">
                <div class="img-container">
                    <img src="{{$book['thumb']}}" alt="">
                    <p> {{substr($book['title'],0,20)}}</p>
                </div>
            </div>
        @endforeach 
    </article>
</div>

@endsection