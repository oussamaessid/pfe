@extends('event.layout')
@section('content')

    <div class="card">
        <div class="card-header">event Page</div>
        <div class="card-body">

            <form action="{{ url('event') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Image</label></br>
                <input type="file" name="image" id="image" class="form-control"></br>
                <label>Description</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Images</label></br>
                <input type="file" name="images[]" multiple></br>
                <label>hotel</label></br>
                <input type="text" name="id_hotel" id="id_hotel" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
