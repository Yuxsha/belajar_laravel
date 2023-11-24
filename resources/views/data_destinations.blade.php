@extends("template2")

@section("title")
Destinations Data
<a href="{{ url('form_tambah') }}" class="btn btn-success btn-md float-end me-4 mt-3">Add</a>
@endsection
@section("title1")
Destinations data
@endsection

@section("content1")
<table class="table table-bordered table-striped mt-5 mb-5" colspan="5" rowspan="5">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Location</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Day open</th>
            <th class="text-center">Time open</th>
            <th class="text-center">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach($destinations as $data)
        <?php $no++; ?>
        <tr>
            <td class="text-center">{{ $data->id }}</td>
            <td class="text-center">{{ $data->name }}</td>
            <td class="text-center">{{ $data->location }}</td>
            <td class="text-center">{{ $data->details }}</td>
            <td class="text-center">{{ $data->day_open }}</td>
            <td class="text-center">{{ $data->time_open }}</td>
            <td class="text-center">{{ $data->price }}</td>
            <td class="text-center">
                <a href="{{ url('data-destinations/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm">
                    Edit
                </a>
                <a href="{{ url('data-destinations/'.$data->id.'/hapus') }}" class="btn btn-danger btn-sm"
                onclick="return confirm('Hapus {{ $data -> name }}?')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection