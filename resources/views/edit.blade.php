@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Note</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('update', $note) }}" id="noteForm">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $note->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2">{{ $note->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="contentField">Content</label>
            <textarea class="form-control" id="contentField" name="content" required>{{ $note->content }}</textarea>
            <small id="charCount" class="form-text text-muted">{{ strlen($note->content) }} / 10000</small>
        </div>
        <button type="submit" class="btn btn-primary">Update Note</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
// Same JavaScript as in create.blade.php
</script>
@endsection
