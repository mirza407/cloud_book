@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Sections') }}
                        @role('Author')
                            <a href="{{ route('sections.create') }}" class="btn btn-primary float-right">Create Section</a>
                        @endrole
                    </div>
                    <div class="mb-3">

                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <ul class="list-group">
                                @foreach ($sections as $section)
                                    <li class="list-group-item">
                                        {{ $section->title }}
                                        <span class="float-right">
                                            <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('sections.destroy', $section->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this section?')">Delete</button>
                                            </form>
                                        </span>
                                        @if ($section->children->count() > 0)
                                            @include('sections.partials.subsections', ['sections' => $section->children])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
