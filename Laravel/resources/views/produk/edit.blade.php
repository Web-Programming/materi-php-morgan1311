@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4>">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4>">Cari Produk</a>
    @endsection

@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>
    @if($errors-any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('produk.update',$product->id) }}" method="POST"></form>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" @error('name')
            is-invalid @enderror"
                value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="invalid-feedback">{ {$message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">harga</label>
            <input type="number" name="price" id="price" step="0.01"
                class="form-control @error('price') is-invalid @enderror value={{ old('price', $product->price) }}">
            @error('price')
                <div class="invalid-feedback">{{$messagd}}</div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" rows="3"
            class="form-control @error('description') is-invalid @enderror">{{ old('description, product->description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

    
    <p>Nama Produk: {{ $product['name'] }}</p>
    <p>ID Produk: {{ $product['id'] }}</p>
    <p>Price: Rp {{ number_format($product['price'], 2, ',', '.') }}</p>
    <p>Description: {{ $product['description'] }}</p>
    <p>Status: {{ $product['status'] }}</p>
    <p>Aktif: {{ $product['is_active'] }}</p>
    <p>Tanggal Rilis: {{ $product['release_date'] }}</p>
    <hr>
    <a href="{{ url('/produk') }}" class="btn  btn-primary">Kembali</a>
</div>
@endsection