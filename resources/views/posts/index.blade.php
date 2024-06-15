@extends('layouts.app')

@section('title','Blog')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 d-flex justify-content-between align-items-center">
            Blog Codepolitan
        </h1>
        @foreach ($posts as $post)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Created at
                            {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">Last updated at
                            {{ date('d M Y H:i', strtotime($post->updated_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
