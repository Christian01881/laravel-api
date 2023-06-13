@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Immagine</th>
        <th scope="col">Tool</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($projects as $project)
        <tr class="vertical">
        <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</div></td>
            <td><img class="image" src="{{ $project->image }}" alt=""></td>
            <td><a href="{{ route('admin.projects.show', ['project'=> $project->id]) }}"><i class="fa-solid fa-eye"></i></a>
               <a href="{{ route('admin.projects.edit', ['project'=> $project->id]) }}"><i class="fa-solid fa-pencil"></i></a>
               <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn red" data-item-title="{{ $project->title }}" ><i class="fa-solid fa-trash"></i></button>
            </form>

      </tr>
      @endforeach

  </table>
@endsection




