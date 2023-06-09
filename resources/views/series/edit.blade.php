@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('series/' . $series->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $series->id }}" id="id" />

                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $series->name }}" class="form-control"></br>

                <label>description</label></br>
                <input type="text" name="description" id="description" value="{{ $series->description }}"
                    class="form-control"></br>

                <label>videolink</label></br>
                <input type="text" name="vediolink" id="vediolink" value="{{ $series->vediolink }}"
                    class="form-control"></br>

                <label>image</label></br>
                <input type="text" name="image" id="image" value="{{ $series->image }}"
                    class="form-control"></br>

                {{-- <label>age</label></br>
                <input type="text" name="age" id="age" value="{{ $students->age }}" class="form-control"></br> --}}

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop