@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Note</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('store') }}" id="noteForm">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="contentField">Content</label>
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
