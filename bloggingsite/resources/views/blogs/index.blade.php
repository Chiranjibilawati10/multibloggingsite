@extends('layouts.app')

@section('content')
@include('partials.meta_static')
        <div class="container">
                @foreach($blogs as $blog)
                <h1><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</a></h1>
                <h2>{{ $blog->body}}</h2>
                @endforeach
        </div>

@endsection