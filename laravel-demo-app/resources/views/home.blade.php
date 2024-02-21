@extends('layouts.master');
@section('content')
<main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a,
    ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
    <div class="row mt-5">
        @foreach($posts as $post)
            <li>id: {{ $post->id }}</li>
            <li>Title: {{ $post->title }}</li>
            {{-- <li>Description: {{ $post->description }}</li> --}}
        @endforeach
    </div>
</main>
@endsection
