@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Shorts</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/shorts/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />

                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <form class="d-flex" role="search" method="GET" action="{{ route('shorts.index') }}"
                                    accept-charset="UTF-8">
                                    <input class="form-control me-2" type="search" placeholder="Search Student"
                                        aria-label="Search" name="search" value="{{ request('search') }}">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                        <br />


                        {{-- when data are added successfully gi message --}}
                        @if ($message = Session::get('success'))
                            {{-- <div>
            <ul>
                <li>{{ $message }}</li>
            </ul>
        </div> --}}

                            {{-- now with alert message --}}
                            <script type="text/javascript">
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: '{{ $message }}'
                                })
                            </script>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>description</th>
                                        <th>vediolink</th>
                                        <th>image</th>
                                        {{-- <th>age</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->vediolink }}</td>
                                            <td>{{ $item->image }}</td>
                                            {{-- <td>{{ $item->age }}</td> --}}
                                            <td>
                                                <a href="{{ url('/shorts/' . $item->id) }}" title="View shorts">
                                                    <button class="btn btn-outline-info">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> View</button></a>


                                                <a href="{{ url('/shorts/' . $item->id . '/edit') }}"
                                                    title="Edit Student">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>Edit</button></a>

                              

                                                <form method="POST" action="{{ route('shorts.destroy', $item->id) }}"
                                                    style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        title="Delete Student" onclick="deleteConfirm(event)">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="table-paginate">
                            {{ $students->links('layouts.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
