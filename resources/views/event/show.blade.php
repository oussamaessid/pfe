@extends('event.layout')
@section('content')


<div class="card">
  <div class="card-header">Services Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $event->name }}</h5>
        <p class="card-text">Image : {{ $event->image }}</p>
        <p class="card-text">Description : {{ $event->description }}</p>

  </div>

    </hr>

  </div>
</div>
