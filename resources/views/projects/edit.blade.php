@extends('layouts.app')

@section('content')
<form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col-6">
            <label for="title" class="form-label">Edit Title</label>
            <input name="title" value="{{ $project->title }}" type="text" class="form-control" value="{{ old('title') }}" id="title">
        </div>
        </div>
        <div class="col-6">
            <label for="image" class="form-label">Edit Image url</label>
            <input name="image"  type="text" class="form-control" id="image">
        </div>
    </div>
    <div class="row mb-3 ">
        <label for="description">Edit Description</label>
        <textarea name="body"  id="body" cols="30" rows="10">
            {{ $project->body }}"
        </textarea>
    </div>
    <div class="form-group">
        <p>Choose technologies</p>
        <div class="d-flex flex-wrap align-items-center w-100 py-4">

            @foreach ($technologies as $technology)
                <div>
                    @if ($errors->any())
                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" class="form-check-input"
                            {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                    @else
                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" class="form-check-input"
                            {{ $product->technologies->contains($technology) ? 'checked' : '' }}>
                    @endif

                    <label for="" class="form-check-label">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>
        @error('technologies')
            <div class="invalid-feedback">{{ $message }}
            </div>
        @enderror
    </div>
    <div class="d-flex justify-content-center mb-3 gap-3">
        <button type="submit" class="btn btn-primary">Edit project</button>
        <button type="reset" class="btn btn-secondary">Reset form</button>
    </div>
</form>
@endsection
