@extends('layouts.app')


@section('content')
     @foreach ( $posts as $post )
      <img src="{{$post->image}}" alt=""> <br>
         {{$post->title}} <br>
     @endforeach
    
@endsection