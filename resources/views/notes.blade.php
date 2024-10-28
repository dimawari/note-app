@extends('layouts.app')

@section('title', 'All Notes')

@section('content')
<style>
    .page-title {
        font-family: Comic Sans MS, Comic Sans, cursive; 
        font-size: 36px; 
        font-weight: bold; 
    }
    .form-control {
        font-family: Bookman, URW Bookman L, serif; 
        font-size: 16px;
        
    }
    .input-group .btn {
        font-family:Bookman, URW Bookman L, serif; 
    }
    .card-title {
        font-family: Palatino, URW Palladio L, serif;
        font-size: 20px; 
    }
    .card-text {
        font-family: Palatino, URW Palladio L, serif;
    }
    .btn-info, .btn-warning, .btn-danger {
        font-family:Bookman, URW Bookman L, serif;
    }
</style>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('index') }}" method="GET" class="form-inline">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search notes..." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary mb-3">Back to Dashboard</a>
    </div>
    
    <h1 class="page-title">All Notes</h1>
    
    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Create New Note</a>

    @if($notes->isEmpty())
        <p>No notes found. {{ request('search') ? 'Try a different search term or create' : 'Start by creating' }} a new note!</p>
    @else
        <div class="row">
            @foreach($notes as $note)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">{{ Str::limit($note->description, 100) }}</p>
                            <a href="{{ route('show', $note) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('edit', $note) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
