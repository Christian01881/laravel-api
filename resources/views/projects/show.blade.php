@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="minus">
        <img class="w-100" src="{{ $project->image }}" alt="">
    </div>
    <div class="major">
        <h1 class="mt-5 text-center">{{ $project->title }}</h1>
        <p class="mt-5 text-center">{{ $project->body }}</p>
        <p class="mt-5 text-center">{{ $project->type->nome }}</p>
        @if($project->technologies && count($project->technologies) > 0)
        <p class="mt-5 text-center">
            @foreach ($project->technologies as $technology)
                {{ $technology->name }}
            @endforeach
        </p>
        @endif
    </div>
</div>

@endsection
