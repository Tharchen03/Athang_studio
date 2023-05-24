@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">Shorts Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">description : {{ $students->description }}</p>
        <p class="card-text">vediolink : {{ $students->vediolink }}</p>
        <p class="card-text">image : {{ $students->image }}</p>
        {{-- <p class="card-text">age : {{ $students->age }}</p> --}}
  </div>
       
    </hr>
  
  </div>
</div>
@endsection