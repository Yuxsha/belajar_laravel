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
        @foreach($destinations as $data)
        <?php $no++; ?>
        <tr>
            <td class="text-center">{{ $no }}</td>
            <td class="text-center">{{ $data->id }}</td>
            <td class="text-center">{{ $data->name }}</td>
            <td class="text-center">{{ $data->location }}</td>
            <td class="text-center">{{ $data->details }}</td>
            <td class="text-center">{{ $data->day_open }},{{ $data->time_open }}</td>
            <td class="text-center">{{ $data->price }}</td>
            <td class="text-center">
                <a href="#" class="btn btn-success btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection