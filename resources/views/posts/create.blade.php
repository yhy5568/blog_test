@extends('layouts.app')

@section('title', 'Create Post')

@section('header', 'Create New Post')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">save</button>
    </form>
@endsection