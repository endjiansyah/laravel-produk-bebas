@extends('template')

@section('content')
    <div class="card-header">
        <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data" class="card card-body">
            @csrf
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" placeholder="title article" id="title" class="form-control mb-3"
                required>

            <label for="description" class="form-label">description</label>
            <textarea name="description" id="description" class="form-control mb-3"></textarea>

            <label for="gambar" class="form-label">gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control mb-3">

            <input type="submit" value="Save" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
