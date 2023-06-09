@extends('event.layout')
@section('content')
    <div class="container">
        <div class="row">


                <div class="card">
                    <div class="card-header">Event</div>
                    <div class="card-body">
                        <a href="{{ url('/event/create') }}" class="btn btn-success btn-sm" title="Add New Event">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" width= '200' height='200' class="img img-responsive" />
                                        </td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                        @foreach ($item->evenementImages as $image)
                                            <img src="{{ asset( $image->image_path) }}" width= '200' height='200' class="img img-responsive">
                                        @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ url('/event/' . $item->id) }}" title="View event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/event/' . $item->id . '/edit') }}" title="Edit event"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ url('/event' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Service" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                        <td>
                                            <p>Starts: {{ $item->start_date_time }}</p>
                                            <p>Ends: {{ $item->end_date_time }}</p>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
