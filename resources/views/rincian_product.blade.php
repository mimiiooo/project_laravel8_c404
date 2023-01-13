@extends('layouts.app')


@section ('title')
Rincian Product
@endsection

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Rincian Product</h3>
        </div>
        <div class="card-body">
            <a href="{{route('product.index')}}">Kembali</a>
            <div class="row ml-2">
                <h4 class="col-3">Kode Barang</h4>
                <h4 class="col-3">: {{$product->kd_barang}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-3">Nama Barang</h4>
                <h4 class="col-3">: {{$product->nm_barang}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-3">Jumlah</h4>
                <h4 class="col-3">: {{$product->jml_barang}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-3">Harga</h4>
                <h4 class="col-3">: {{$product->harga}}</h4>
            </div>
        </div>
    </div>
</div>
@endsection