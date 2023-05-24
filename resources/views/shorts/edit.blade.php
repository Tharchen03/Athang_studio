@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('shorts/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id" />

                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"></br>

                <label>description</label></br>
                <input type="text" name="description" id="description" value="{{ $students->description }}"
                    class="form-control"></br>

                <label>vediolink</label></br>
                <input type="text" name="vediolink" id="vediolink" value="{{ $students->vediolink }}"
                    class="form-control"></br>

                <label>image</label></br>
                <input type="text" name="image" id="image" value="{{ $students->image }}"
                    class="form-control"></br>

                {{-- <label>age</label></br>
                <input type="text" name="age" id="age" value="{{ $students->age }}" class="form-control"></br> --}}

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop