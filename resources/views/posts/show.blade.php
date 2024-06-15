@extends('layouts.app')

@section('title', "Blog | $post->title ")

@section('content')
<div class="container content mt-5">
    <article class="blog-post card shadow-lg p-4 mb-5 bg-white rounded">
        <h1 class="mb-3 border-bottom pb-2">{{ $post->title }}</h1>
        <p class="blog-post-meta text-muted">Last updated at {{ date('d M Y H:i', strtotime($post->updated_at)) }}
        </p>
        <p>{{ $post->content }}</p>

        <div class="comments-section mt-5">
            <h5>{{ $total_comments }} Komentar</h5>
            @foreach ($comments as $comment)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('images/profile.png') }}" alt="User Avatar" class="rounded-circle me-2"
                                width="40" height="40">
                            <strong>Pengguna anonim</strong>
                        </div>
                        <p class="card-text">{{ $comment->comment }}</p>
                        <small class="text-muted">{{ date('d M Y H:i', strtotime($comment->created_at)) }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </article>

    <div class="btn-container mt-4">
        <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-info">Edit</a>
        <form action="{{ url("posts/$post->id") }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="{{ url('posts') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection