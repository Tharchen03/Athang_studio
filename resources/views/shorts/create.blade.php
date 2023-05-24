@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Shorts Page</div>
        <div class="card-body">

            <form action="{{ url('shorts') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control">
            </br>

            <label>description</label></br>
            <input type="text" name="description" id="description" class="form-control">
        </br>

                <label>vediolink</label></br>
                <input type="text" name="vediolink" id="vediolink" class="form-control">
            </br>

                <label>image</label></br>
                <input type="text" name="image" id="image" class="form-control">
            </br>
{{-- 
            <label>age</label></br>
            <input type="text" name="age" id="age" class="form-control">
        </br> --}}

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
