@extends('template')

@section('content')
    <div class="card-header">
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="card card-body">
            @csrf
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" placeholder="nama produk" id="nama" class="form-control" required>

            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" placeholder="deskripsi produk" id="deskripsi" class="form-control">

            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" placeholder="harga produk" id="harga" class="form-control">

            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" placeholder="stock produk" id="stock" class="form-control">

            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">

            <input type="submit" value="Save" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
