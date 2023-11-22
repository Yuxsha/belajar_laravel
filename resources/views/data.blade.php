@extends("template")

@section("title")
Data
@endsection

@section("content")

<button class="btn btn-primary float-end mb-3">
    <a href="{{ url() }}" class="nav-link">Tambah</a>
</button>

<table class="table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">NO.</th>
            <th class="text-center">ID</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Buka</th>
            <th class="text-center">Harga</th>
            <th class="text-center">#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach()
    </tbody>
</table>