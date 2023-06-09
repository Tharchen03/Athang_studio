@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">series Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $series->name }}</h5>
        <p class="card-text">description : {{ $series->description }}</p>
        <p class="card-text">vediolink : {{ $series->vediolink }}</p>
        <p class="card-text">image : {{ $series->image }}</p>
        {{-- <p class="card-text">age : {{ $series->age }}</p> --}}
  </div>
       
    </hr>
  
  </div>
</div>
@endsection