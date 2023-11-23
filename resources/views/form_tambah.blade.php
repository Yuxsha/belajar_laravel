@extends("template")

@section("title")
Add destinations form
@endsection

@section("content1")
    <form action="{{ url('tambah-destinations') }}" method="post" class="form m-5 p-5">
        @csrf
        <div class="form-label">
            <label for="id">
                <b>
                    ID :
                </b>
            </label>
            <input type="text" class="form-control" name="id" placeholder="Input Destinations ID here" required>
        </div>
        <div class="form-label mb-2">
            <label for="name">
                <b>
                    Name :
                </b>
            </label>
            <input type="text" class="form-control" name="name" placeholder="Input Destinations name here" required>
        </div>
        <div class="form-label mb-2">
            <label for="location">
                <b>
                    Location : 
                </b>
            </label>
            <input type="text" class="form-control" name="location" placeholder="Input Destinations location here" required>
        </div>
        <div class="form-label">
            <label for="details">
                <b>
                    Details : 
                </b>
            </label>
            <textarea class="form-control" name="details" cols="30" rows="5"
            placeholder="Input Destinations details here" required></textarea>
        </div>
        <div class="form-label">
            <label for="day_open">
                <b>
                    Day open :
                </b>
            </label>
            <input type="text" class="form-control" name="day_open" placeholder="Input Destinations day open here" required>
        </div>
        <div class="form-label">
            <label for="time_open">
                <b>
                    Time open :
                </b>
            </label>
            <input type="text" class="form-control" name="time_open" placeholder="Input Destinations time open here" required>
        </div>
        <div class="form-label">
            <label for="price">
                <b>
                    Price :
                </b>
            </label>
            <input type="text" class="form-control" name="price" placeholder="Input Destinations price here" required>
        </div>
        <button type="submit" class="btn btn-success float-end mt-4 me-3 mb-5 btn-md">
            Send
        </button>
        <a href="{{ url('data-destinations') }}" class="btn btn-danger float-end mt-4 me-3 mb-5 btn-md">
            Back
        </a>
    </form>
</table>
@endsection

