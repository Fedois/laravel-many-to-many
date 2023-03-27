@extends('layouts.admin')

@section('content')
<div class="container all-projects">
    
    <h1 class="my-3">Tutti i tipi di progetto</h1>

    {{-- <a href="{{ route('admin.types.create') }}" class="btn btn-primary my-2">Nuovo Tipo</a> --}}

    @include('partials.success')

    <ul class="list-group">
        @foreach ($technologies as $technology)
            <li class="my-1 list-group-item list-group-item-action">
                {{-- <a href="{{ route('admin.types.show', $technology->id) }}" class="text-dark text-decoration-none"> --}}

                    <span class="me-5">{{ $technology->id }}</span>  {{ $technology->name }}

                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection