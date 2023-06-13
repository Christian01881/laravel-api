@extends('layouts.app')

@section('content')
    <main>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="row mb-3 mt-5">
                <div class="col-6">
                    <label for="title" class="form-label">Title</label>
                    <input required name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required min="3" maxlength="255" id="title" aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">
                        Inserisci un titolo - required - minimo 3 caratteri massimo 100.
                    </div>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="image" class="form-label" value="{{ old('image') }}">Image url</label>
                    <input required name="image" type="text" class="form-control @error('image') is-invalid @enderror" required maxlength="255" id="image" aria-describedby="imageHelp">
                    <div id="imageHelp" class="form-text">
                        Inserisci un URL con 255 caratteri massimo.
                    </div>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mb-3 mt-5">
                    <label for="body">Description</label>
                    <textarea class="form-control" name="body" id="body" value="{{ old('body') }}" cols="30" rows="10"></textarea>
                </div>

                <div class="p-3 flex-column align-items-center">
                    <label class="text-uppercase fw-bold" for="type_id">Type</label>

                    <select name="type_id" id="type_id" class="form-control @error('type') is-invalid @enderror">
                            <option value="">Select the project's type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nome }}</option>
                        @endforeach
                    </select>


                    <div id="typeHelp" class="form-text">
                        <span>Inserisci la categoria</span>
                    </div>

                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group ms-5 mt-5">
                        <p>Choose technologies</p>
                        <div class="d-flex flex-wrap align-items-center w-100 py-4">
                            @foreach ($technologies as $technology)
                                <div>
                                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" class="form-check-input"
                                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                                    <label for="" class="form-check-label">{{ $technology->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('technologies')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="d-flex justify-content-center mb-3 gap-3">
                    <button type="submit" class="btn btn-primary">Add project</button>
                    <button type="reset" class="btn btn-secondary">Reset form</button>
                </div>
            </div>
        </form>
    </main>
@endsection
