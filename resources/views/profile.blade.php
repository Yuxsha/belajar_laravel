@extends("template")

@section("title1")
Profile
@endsection

@section("content")
<div class="row m-5">
    <div class="col-3">
        <div class="card shadow m-5" >
            <img src="{{ url('assets/sigma-male.jpg') }}"  class="image card-img-top" alt="">
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
        <div class="card shadow float-end m-5">
            <img src="{{ url('assets/logo-skinfa.png') }}" class="image card-img-top" alt="">
            <div class="card-header">
                <div class="body">
                    <p class="">
                        SMK  Informatika Al-Irsyad Al-Islamiyyah ini adalah tempat kami menimba ilmu, ilmu komputer, ilmu agama dan banyak lagi.
                        SMK Informatika Al-irsyad Al-islamiyyah terletak di kota Cirebon, jawa barat. pada Jln.Perjuangan No.31. Terakreditasi A!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card shadow float-end mt-5 ms-5 mb-5">
            <img src="{{ url('assets/no-picture-profile.jpg') }}" class="image card-img-top" alt="">
            <div class="card-header">
                <div class="body">
                    <p class="">
                        Halo, saya Muhammad Raffa Fadellah dari kelas XI RPL.
                        saya berperan sebagai seorang frontend dalam project ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection