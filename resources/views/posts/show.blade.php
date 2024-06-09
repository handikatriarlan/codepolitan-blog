<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Blog | {{ $post->title }}</title>
</head>

<body>
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
                                <img src="{{ asset('images/profile.png') }}" alt="User Avatar"
                                    class="rounded-circle me-2" width="40" height="40">
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

    <footer class="footer text-center text-lg-start mt-5">
        <div class="container p-4">
            <p class="text-center mb-0">© 2024 Blog Codepolitan. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
