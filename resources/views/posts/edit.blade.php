@extends('layouts.app')

@section('title', 'Blog | Edit Postingan')

@section('content')
    <div class="container content mt-5">
        <h1 class="mb-4">Edit Postingan</h1>
        <form action="{{ url("posts/$post->id") }}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea style="resize: none" class="form-control" id="content" rows="5" name="content" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url("posts/$post->id") }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection