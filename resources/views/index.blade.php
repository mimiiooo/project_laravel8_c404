@extends ('layouts.app')

@section ('title')
List Product
@endsection

@section ('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Data Produk</h3>
        </div>

        <div class="card-body text-center">
            <a href="{{route('product.create')}}" class="btn btn-danger mr-5">Tambah Produk</a>
            <table class="table table-danger table-striped">
                <thead>
                    <tr>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $p)
                    <tr>
                        <td>{{$p->kd_barang}}</td>
                        <td>{{$p->nm_barang}}</td>
                        <td>{{$p->jml_barang}}</td>
                        <td>{{$p->harga}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{route('product.show', $p->id)}}" class="btn btn-success mr-5">Show</a>
                                <a href="{{route('product.edit', $p->id)}}" class="btn btn-primary mr-5">Edit</a>
                                <form action="{{route('product.destroy', $p->id)}}" method="POST">
                                    @csrf
                                    @method ('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection