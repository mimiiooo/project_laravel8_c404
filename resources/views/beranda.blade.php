@extends ('layouts.app')

@section ('title')
Dashboard
@endsection

@section ('content')


<!-- Header  -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src={{asset('img/gratong.jpg')}} alt="..." class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5>Gratis Ongkir seluruh Indonesia</h5>
                <p>Minimum belanja Rp. 50.000</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src={{asset('img/kecantikan.jpg')}} alt="..." class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sale !!! </h5>
                <p>Produk Kecantikan</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src={{asset('img/elektronik.png')}} alt="..." class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sale !!! </h5>
                <p>Produk Elektronik</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Content -->

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Harga Terbaik</h5>
        <p class="card-text">MT SHOP menawarkan harga terbaik dengan kualitas barang yang sudah tersertifikasi dan lulus uji. Jangan ragu untuk berbelanja...</p>
    </div>
</div>

@endsection