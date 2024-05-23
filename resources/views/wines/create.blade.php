@extends('layout.main')

@section('content')

<div class="container" style="height: calc(100vh - 88px - 40px);">
    <h1>Aggiungi vino</h1>

    <form action="{{ route('wines.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="winery" class="form-label">Cantina (*)</label>
            <input name="winery" type="text" class="form-control @error('winery') is-invalid @enderror" id="winery" value="{{ old('winery') }}">
            @error('winery')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="wine" class="form-label">Vino (*)</label>
            <input name="wine" type="text" class="form-control @error('wine') is-invalid @enderror" id="wine" value="{{ old('wine') }}">
            @error('wine')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="average" class="form-label">Voto (*)</label>
            <input name="average" type="text" class="form-control @error('average') is-invalid @enderror" id="average" value="{{ old('average') }}">
            @error('average')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reviews" class="form-label">Recensioni (*)</label>
            <input name="reviews" type="text" class="form-control @error('reviews') is-invalid @enderror" id="reviews" value="{{ old('reviews') }}">
            @error('reviews')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Località (*)</label>
            <input name="location" type="text" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ old('location') }}">
            @error('location')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input name="image" type="text" class="form-control @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}">
            @error('image')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">Invia nuovo vino</button>
        <button class="btn btn-danger" type="reset">Reset</button>

    </form>
</div>


@endsection
