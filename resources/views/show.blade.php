@extends('layouts.app')

@section('title', 'View Note')

@section('content')
<style>
    h1 {
        font-family: 'Comic Sans MS', Comic Sans, cursive;
        font-size: 36px;
        font-weight: bold;
    }
    .card-title {
        font-family: Palatino, URW Palladio L, serif;
        font-size: 20px;
    }
    .card-text {
        font-family: Palatino, URW Palladio L, serif;
    }
    .btn {
        font-family: Bookman, URW Bookman L, serif;
    }
</style>
<div class="container">
    <h1>{{ $note->title }}</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">{{ $note->description ?: 'No description provided.' }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Content</h5>
            <p class="card-text">{{ $note->content }}</p>
        </div>
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary mb-3">Back to Dashboard</a>
    <div class="mt-3">
        <a href="{{ route('edit', $note) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('destroy', $note) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
        </form>
    </div>
</div>
@endsection
