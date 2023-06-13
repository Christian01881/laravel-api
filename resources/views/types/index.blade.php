@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Tipo</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
       @foreach ($types as $type)
        <tr class="vertical">
            <td>{{ $type->nome }}</div></td>
            <td><a href="{{ route('admin.type.show', ['type'=> $type->id]) }}"><i class="fa-solid fa-eye"></i></a>
               <a href="{{ route('admin.type.edit', ['type'=> $type->id]) }}"><i class="fa-solid fa-pencil"></i></a>
               <form action="{{ route('admin.type.destroy', $type->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn red" data-item-title="{{ $type->nome }}" ><i class="fa-solid fa-trash"></i></button>
            </form>

      </tr>
      @endforeach

  </table>
@endsection
