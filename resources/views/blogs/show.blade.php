@extends('layouts.app')

@section('title') Show @endsection

@section('content')

<div class="container-fluid">
    <article>
        <div class="jumbotron">
            <h1>{{ $blog->title }}</h1>
        
        <a class="btn btn-primary btn-x pull-left" href=" {{ route('blogs.edit', $blog->id) }}">Edit</a>
        <form method="post" action="{{ route('blogs.delete', $blog->id) }}">
            @csrf
            {{ method_field('delete') }}

            <button type="submit" class="btn btn-danger" >Delete</button>
            </form>
        </div>
        <div class="col-md-12">
            <p>{{ $blog->body }}</p>
        </div>
    </article>
    
</div>
    
@endsection
