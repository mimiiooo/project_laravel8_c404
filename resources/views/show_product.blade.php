@extends ('layouts.app')

@section ('title')
Product MT SHOP
@endsection

@section ('content')

<!-- Content 1 -->

<div class="container">
    <div class="row bg-light p-4 text-dark">
        <div class="bg-danger p-2 text-center text-dark bg-opacity-25 fs-1 fw-bold">Katalog Barang
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-5">

        <div class="col">
            <div class="card h-100">
                <img src={{asset('img/oriflame.jpeg')}} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Oriflame</h5>
                    <p class="card-text">Rp. 50.000</p>
                    <a href="#" class="btn btn-danger">Beli</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src={{asset('img/maybeline.jpg')}} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maybeline</h5>
                    <p class="card-text">Rp. 120.000</p>
                    <a href="#" class="btn btn-danger">Beli</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src={{asset('img/cnf.jpg')}} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">C N F</h5>
                    <p class="card-text">Rp. 85.000</p>
                    <a href="#" class="btn btn-danger">Beli</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src={{asset('img/beaute.jpg')}} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beaute</h5>
                    <p class="card-text">Rp. 90.000</p>
                    <a href="#" class="btn btn-danger">Beli</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection