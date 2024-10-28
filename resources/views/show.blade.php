@extends('layouts.app')

@section('title', 'View Note')

@section('content')
<div class="container">
    <a href="{{ route('index') }}" class="btn btn-outline-primary mb-3">Back to Notes</a>
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
    <a href="{{ route('index') }}" class="btn btn-outline-primary mb-3">Back to Notes</a>
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
