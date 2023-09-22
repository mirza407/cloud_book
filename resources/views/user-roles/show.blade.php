<!-- resources/views/user-roles/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Role Details</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Role Name: {{ $role->name }}</h4>
                <p class="card-text">Role Description: {{ $role->description }}</p>
                <p class="card-text">Created At: {{ $role->created_at }}</p>
                <p class="card-text">Updated At: {{ $role->updated_at }}</p>
            </div>
        </div>
        <a href="{{ route('user-roles.index') }}" class="btn btn-primary mt-3">Back to Roles List</a>
    </div>
@endsection
