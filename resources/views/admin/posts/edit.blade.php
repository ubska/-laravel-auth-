@extends('layouts.app')

@section('content')
    <h1>Modifica il Post</h1>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT') <!-- Indica che stiamo facendo un aggiornamento -->

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reading_time" class="form-label">Tempo di lettura</label>
            <input type="number" class="form-control" id="reading_time" name="reading_time"
                value="{{ old('reading_time', $post->reading_time) }}">
            @error('reading_time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Contenuto</label>
            <textarea class="form-control" id="text" name="text" rows="6">{{ old('text', $post->text) }}</textarea>
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
