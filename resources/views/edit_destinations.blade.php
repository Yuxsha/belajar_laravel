@extends("template")

@section("title1")
Edit destinations form
@endsection

@section("content")
<form action="{{ url('edit-destinations') }}" method="post" class="form mt-3 p-5 ">
    @csrf
    <input type="hidden" name="id" value="{{ $destinations->id }}">
    <div class="mb-2 form-label">
        <label for="name">
            <b>
                Name :
            </b>
        </label>
        <input type="text" class="form-control" value="{{ $destinations->name }}" required>
    </div>
    <div class="form-label mb-2">
        <label for="location">
            <b>
                Location :
            </b>
        </label>
        <input type="text" class="form-control" value="{{ $destinations->location }}" required>
    </div>
    <div class="form-label">
        <label for="details">
            <b>
                Details :
            </b>
        </label>
        <textarea name="details" class="form-control" id="" cols="30" rows="5">
            {{ $destinations->details }}
        </textarea>
    </div>
    <div class="form-label">
        <label for="day_open">
            <b>
                Day open :
            </b>
        </label>
        <input type="text" class="form-control" value="{{ $destinations->day_open }}" required>
    </div>
    <div class="form-label">
        <label for="time_open">
            <b>
                Time open :
            </b>
        </label>
        <input type="text" class="form-control" value="{{ $destinations->time_open }}" required>
    </div>
    <div class="form-label">
        <label for="price">
            <b>
                Price : 
            </b>
        </label>
        <input type="text" class="form-control" value="{{ $deestinations->price }}" required>
    </div>
    <button type="submit" 
        class="btn btn-success btn-md float-end mt-4 me-3 mb-5">
        Edit
    </button>
    <a href="{{ url('data-destinations') }}" 
        class="btn btn-danger btn-md float-end mt-4 me-3 mb-5">
        Back
    </a>
</form>
@endsection
