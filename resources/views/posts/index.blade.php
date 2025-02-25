@extends('layouts.app')

@section('title', 'Post List')

@section('header', 'All Posts')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn-primary mb-3">Create New Post</a>
    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn-warning btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection