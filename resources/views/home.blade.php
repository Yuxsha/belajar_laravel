@extends("template")

@section("title1")
Home
@endsection

@section("content")
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ url('assets/prambanan.jpg') }}" class="img d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Tempat wisata</h1>
            <h5>Candi Prambanan</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ url('assets/keraton.jpg') }}" class="img d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Tempat wisata</h1>
            <h5>Keraton kasepuhan Cirebon</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ url('assets/bali.jpg') }}" class="img d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>Tempat wisata</h1>
            <h5>Pulau Dewata Bali</h5>
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
@endsection