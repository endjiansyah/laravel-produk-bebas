@extends('template')

@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <a href="{{ route('article.create') }}" class="btn btn-secondary">Tambah article</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="card-info">
                        <td>title</td>
                        <td>description</td>
                        <td>Gambar</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td><img src="{{ $article->gambar }}" alt="{{ $article->title }}" width="100px"></td>
                            <td>
                                <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('article.edit', $article->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
