@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Archived Notes</h1>
    
    <div class="row">
        @foreach($archivedNotes as $note)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $note->title }}</h5>
                        <p class="card-text">{{ Str::limit($note->description, 100) }}</p>
                        <form action="{{ route('restore', $note->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-primary">Restore</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $archivedNotes->links() }}

    <a href="{{ route('index') }}" class="btn btn-secondary">Back to Notes</a>
</div>
@endsection
