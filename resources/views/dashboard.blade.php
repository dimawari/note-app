@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Your Notes</h5>
                    <p class="card-text">Manage your notes here.</p>
                    <a href="{{ route('index') }}" class="btn btn-primary">View All Notes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Note</h5>
                    <p class="card-text">Start a new note.</p>
                    <a href="{{ route('create') }}" class="btn btn-success">Create New Note</a>
                </div>
            </div>
        </div>
        <!-- Add more dashboard widgets as needed -->
    </div>
</div>
@endsection
