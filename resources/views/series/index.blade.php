@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Add series</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/series/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New series
                        </a>
                        <br />

                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <form class="d-flex" role="search" method="GET" action="{{ route('series.index') }}"
                                    accept-charset="UTF-8">
                                    <input class="form-control me-2" type="search" placeholder="Search series"
                                        aria-label="Search" name="search" value="{{ request('search') }}">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                        <br />
                        @if ($message = Session::get('success'))
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


                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Video Link</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($series as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="long-text">{{ $item->name }}</td>
                            <td class="long-text">{{ $item->description }}</td>
                            <td class="long-text">{{ $item->vediolink }}</td>
                            <td class="long-text">{{ $item->image }}</td>
                            <td>
                                <a href="{{ url('/series/' . $item->id) }}" title="View series">
                                    <button class="btn btn-outline-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                <a href="{{ url('/series/' . $item->id . '/edit') }}" title="Edit series">
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ route('series.destroy', $item->id) }}"
                                    style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" title="Delete series"
                                        onclick="deleteConfirm(event)">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <div class="pagination">
                {{ $series->links('layouts.pagination') }}
            </div>
        </div>

    </div>
@endsection
