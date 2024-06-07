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
    <title>Blog | Judul: {{ $post[1] }}</title>
</head>

<body>
    <div class="container content mt-5">
        <article class="blog-post">
            <h1 class="mb-1">{{ $post[1] }}</h1>
            <p class="blog-post-meta text-muted">{{ date('d M Y H:i', strtotime($post[3])) }}</p>
            <p>{{ $post[2] }}</p>
        </article>
        <a href="{{ url('posts') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <footer class="footer text-center text-lg-start mt-5">
        <div class="container p-4">
            <p class="text-center mb-0">© 2024 Blog Codepolitan. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
