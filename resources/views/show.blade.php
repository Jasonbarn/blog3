@extends('layouts.blog')

@section('content')
<div class="container">
<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

<p>Par {{ $post->user->name }}</p>

<hr>

<h4>Commentaires</h4>

@foreach ($post->comments as $comment)
<div class="mb-2">
<p>{{ $comment->content }}</p>
<small>Par {{ $comment->user->name }} le {{$comment->created_at}}</small>
 <br>
<br>
<br>

</div>
@endforeach



@auth

<form method="POST" action='{{route('index')}}'>
    @csrf  
    
    @method('PUT')
    
    
    
    </form>
@csrf
<div class="mb-3">
<label for="content" class="form-label">Votre commentaire</label>
<br>

<textarea class="form-control" id="content" name="content" rows="3" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Ajouter un commentaire</button>
<br>
</form>
@endauth

</div>
<div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
    <a href="{{ route('index') }}" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Back to Post</a>
    <br>

</div>


@endsection



