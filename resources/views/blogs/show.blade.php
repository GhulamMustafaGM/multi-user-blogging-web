@extends('layouts.app')

@section('title') Show @endsection

@section('content')

<div class="container-fluid">
    <article>
        <div class="jumbotron">
            <h1>{{ $blog->title }}</h1>
        </div>
        <h1><a href=" {{ route('blogs.edit', $blog->id) }}">Edit </a> {{ $blog->title }}</h1>
    <form method="post" action="{{ route('blogs.delete', $blog->id) }}">
        @csrf

        <button type="submit" class="btn btn-danger" >Delete</button>
    </form>
        <div class="col-md-12">
            <p>{{ $blog->body }}</p>
        </div>
    </article>
    
</div>
    
@endsection
