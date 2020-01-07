@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="jumbotron">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="col-md-12">
            <a href="{{ route('blogs.create')}}" class="btn btn-primary">Create a blog</a> 
        
            <a href="{{ route('blogs.trash')}}" class="btn btn-danger">Trashed blog</a> 

            <a href="{{ route('categories.create')}}" class="btn btn-success">Create categories</a> 

    </div>
</div>

@endsection