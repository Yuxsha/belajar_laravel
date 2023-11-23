@extends("template")

@section("title1")
Profile
@endsection

@section("content")
<div class="row ms-5">
    <div class="col-5">
        <div class="card shadow mt-5 ms-5" >
            <img src="{{ url('assets/bali.jpg') }}"  class="image card-img-top" alt="">
            <div class="card-header">
                <div class="body">
                    <p class="">
                        Bismillah, Saya Rizqi Nur Sya'ban, kelas XI RPL.
                        peran saya dalam project ini sebagai seorang backend.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card shadow float-end mt-5 ms-5 mb-5">
            <img src="{{ url('assets/bali.jpg') }}" class="image card-img-top" alt="">
            <div class="card-header">
                <div class="body">
                    <p class="">
                        Halo, perkenalkan saya Muhammad Raffa Fadellah, dari kelas XI RPL.
                        saya berperan sebagai seorang frontend dalam project ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection