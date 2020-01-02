@extends('layouts.app')

@section('content')

@foreach($blogs as $blog)
        <h1><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</a></h1>
        <h2>{{ $blog->body}}</h2>
@endforeach

@endsection