@extends('layouts.app')
@section('content')
@include('partials.meta_dynamic')

    <div class  ="container-fluid">
       <article>
            <div class="jumbotron">
                <div class="col-md-12"> 
                    @if($blog->featured_image)
                        <img src="/images/featured_image/{{ $blog->featured_image ? $blog->featured_image : ''}}" alt="{{ str_limit($blog->title, 50) }}" class="featured_image">
                    @endif
                </div>
                <div class="col-md-12">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm pull-left btn-margin-right btn-margin-right" href="{{ route('blogs.edit', $blog->id) }}">Edit </a>

                        <form method="post" action="{{ route('blogs.delete', $blog->id)}}">
                            {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger btn-sm pull-left">Delete</button>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                
            </div>

            <div class="col-md-12">
                <p>{{ $blog->body}}</p>
                <hr>
                <strong>Categories: </strong>
                @foreach($blog->category as $category)
                    <span> <a href="{{ route('categories.show', $category->slug )}}">{{ $category->name }} </a> </span>
                @endforeach
            </div>
       </article>
    </div>

@endsection