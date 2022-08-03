@extends('backend.layout.app')
@section('title', 'Biography')
@section('from', 'Home Page')
@push('js')
    <script>
        function edit(id) {
            loader.show();
            status.show();
            $.ajax({
                url: "{{ url('admin/edit-biography') }}" + '/' + id,
                type: "GET",
                success: function (response) {
                    $('#editBiography>.modal-dialog>.modal-content>.show').html('');
                    $('#editBiography>.modal-dialog>.modal-content>.show').html(response.view);
                    loader.hide();
                    status.hide();
                    $('#editBiography').modal('show');
                },
                error: function (error) {
                    loader.hide();
                    status.hide();
                    alert('Sorry,something went wrong!');
                }
            })
        }
    </script>
@endpush
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('from')</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-info" data-bs-toggle="modal"
                           data-bs-target="#addBiography">Add Biography</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($biographies as $key => $biography)
                                    <tr>
                                        <td>{{ $biographies->firstItem() + $key }}</td>
                                        <td>{{ $biography->title }}</td>
                                        <td>{{ $biography->description }}</td>
                                        <td>{{ $biography->date->format('d M Y') }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="m-2 btn btn-dark" onclick="edit({{$biography->id}})">
                                                    Edit</a>
                                                <a href="{{ route('delete.biography',$biography->id) }}" class="m-2  btn btn-danger"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5" class="text-center">No Biography Found!</td>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $biographies->links('pagination::bootstrap-5') }}
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container-fluid -->

    {{-- Add Modal --}}
    <div class="modal fade" id="addBiography" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="addBiographyLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBiographyLabel">Add Biography</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('store.biography') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                   required>
                        </div>
                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" placeholder="Date"
                                   required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="editBiography" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="editBiographyLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBiographyLabel">Edit Biography</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="show"></div>
            </div>
        </div>
    </div>
@endsection
