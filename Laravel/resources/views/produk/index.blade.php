@extends('app.master')

@section('title', 'Produk Index')

@section ('sidebar')
    @parent
    @section('name')
        <a href="/Produk/create" class="list-group-item list-group-item-action ps-4">Tambah Produk</a>
        <a href="/Produk/create" class="list-group-item list-group-item-action ps-4">cari Produk</a>
    @endsection
@endsection

@section('content')
    <h1 class=h3 mb-3>Produk Indeks</h1>
    <p class="text-muted">Halaman daftar produk menggunakan layout master.</p>

    <div class="card">
        <div class="card body">
            konten produk bisa ditampilkan disini
        </div>
    </div>
@endsection
