@extends('layouts.app')

@section ('title')
Tambah Product
@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Product</h3>
        </div>
        <div class="card-body">
            <a href="{{route('product.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('product.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Kode Barang <input type="text" name="kd_barang" required>
                    Nama Barang <input type="text" name="nm_barang" required>
                    Jumlah <input type="text" name="jml_barang" required>
                    Harga <input type="text" name="harga" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection