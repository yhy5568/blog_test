@extends('layouts.app')

@section('title', $post->title)

@section('header', $post->title)

@section('content')
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to list</a>
@endsection