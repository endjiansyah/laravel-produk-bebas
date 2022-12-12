@extends('template')

@section('content')
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-lg-4 p-2">
                <div class="card">
                    <img class="card-img-top" src="{{ $article->gambar }}" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $article->title }}</h4>
                        <p class="card-text">{{ strip_tags(substr($article->description, 0, 120)) . ' ...' }}</p>
                        <div class="d-flex justify-content-between">
                            <p class="my-auto">{{ $article->updated_at }}</p>
                            <a href="{{ route('article.detail', $article->id) }}"
                                class="btn text-primary font-weight-bold my-auto">See
                                More</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
