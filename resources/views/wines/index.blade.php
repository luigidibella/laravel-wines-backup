@extends('layout.main')

@section('content')

<div class="container">
    <h1>Lista vini</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">winery</th>
            <th scope="col">wine</th>
            <th scope="col">average</th>
            <th scope="col">reviews</th>
            <th scope="col">location</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $wines as $wine)
            <tr>
              <td>{{ $wine->winery }}</td>
              <td>{{ $wine->wine }}</td>
              <td>{{ $wine->average }}</td>
              <td>{{ $wine->reviews }}</td>
              <td>{{ $wine->location }}</td>
              <td>
                <div class="d-flex">
                    <a href="{{ route('wines.edit', $wine->id) }}"><div class="btn btn-warning me-2"><i class="fa-solid fa-pen-to-square"></i></div></a>
                    <form
                        class="d-inline"
                        action="{{ route('wines.destroy', $wine->id) }}"
                        method="POST"
                        onsubmit="return confirm('Sei sicuro di vole eliminare \'{{ $wine->wine }}\'?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
