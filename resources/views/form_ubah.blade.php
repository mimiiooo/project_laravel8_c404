@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Product</h3>
        </div>
        <div class="card-body">
            <a href="{{route('product.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Kode Barang <input type="text" name="kd_barang" required value="{{ $product->kd_barang }}">
                    Nama Barang <input type="text" name="nm_barang" required value="{{ $product->nm_barang }}">
                    Jumlah Barang <input type="text" name="jml_barang" required value="{{ $product->jml_barang }}">
                    Harga <input type="text" name="harga" required value="{{ $product->harga }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection