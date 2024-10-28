@extends('layouts.app')

@section('content')
<style>
    .page-title {
        font-family: Comic Sans MS, Comic Sans, cursive; 
        font-size: 36px;
        font-weight: bold; 
    }
    .form-label {
        font-family: Bookman, URW Bookman L, serif; 
        font-size: 18px; 
    }
    .form-control {
        font-family: Palatino, URW Palladio L, serif; 
        font-size: 16px; 
    }
    .form-text {
        font-family: Palatino, URW Palladio L, serif; 
    }
    .btn-primary {
        font-family: Bookman, URW Bookman L, serif; 
    }
</style>
<div class="container">
    <h1 class="page-title">Create New Note</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{ route('index') }}" class="btn btn-outline-primary mb-3">Back to Notes</a>
    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary mb-3">Back to Dashboard</a>

    <form method="POST" action="{{ route('store') }}" id="noteForm">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="contentField" class="form-label">Content</label>
            <textarea class="form-control" id="contentField" name="content" required></textarea>
            <small id="charCount" class="form-text text-muted">0 / 10000</small>
        </div>
        <button type="submit" class="btn btn-primary">Save Note</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
document.getElementById('contentField').addEventListener('input', function() {
    let charCount = this.value.length;
    document.getElementById('charCount').textContent = charCount + ' / 10000';

    if (charCount > 10000) {
        this.value = this.value.substr(0, 10000);
        document.getElementById('charCount').textContent = '10000 / 10000';
    }
});

document.getElementById('noteForm').addEventListener('submit', function(e) {
    let content = document.getElementById('contentField').value;
    if (content.length > 10000) {
        e.preventDefault();
        alert('Content must be 10,000 characters or less.');
    }
});
</script>
@endsection
