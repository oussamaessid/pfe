@extends('event.layout')
@section('content')

    <div class="card">
        <div class="card-header">subcategory Page</div>
        <div class="card-body">

            <form action="{{ url('event/' .$event->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$event->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$event->name}}" class="form-control"></br>
                <label>Image</label></br>
                <input type="text" name="image" id="image" value="{{$event->image}}" class="form-control"></br>
                <label>Description</label></br>
                <input type="text" name="description" id="description" value="{{$event->description}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
