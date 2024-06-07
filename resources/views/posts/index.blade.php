<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 d-flex justify-content-between align-items-center">
            Blog Codepolitan
            <a class="btn btn-success" href="{{ url('posts/create') }}">Tambah Postingan</a>
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

    <footer class="footer text-center text-lg-start">
        <div class="container p-4">
            <p class="text-center mb-0">© 2024 Blog Codepolitan. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
