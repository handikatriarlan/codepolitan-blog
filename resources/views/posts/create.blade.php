@extends('layouts.app')

@section('title', 'Blog | Tambah Postingan')

@section('content')
    <div class="container content mt-5">
        <h1 class="mb-4">Tambah Postingan</h1>
        <form action="{{ url('posts') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea style="resize: none" class="form-control" id="content" rows="5" name="content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('posts') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <footer class="footer text-center text-lg-start mt-5">
        <div class="container p-4">
            <p class="text-center mb-0">© 2024 Blog Codepolitan. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
@endsection
