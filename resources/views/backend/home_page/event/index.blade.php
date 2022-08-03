@extends('backend.layout.app')
@section('title', 'Events')
@section('from', 'Home Page')
@push('js')
    <script>
        function edit(id) {
            loader.show();
            status.show();
            $.ajax({
                url: "{{ url('admin/edit-event') }}" + '/' + id,
                type: "GET",
                success: function (response) {
                    $('#editEvent>.modal-dialog>.modal-content>.show').html('');
                    $('#editEvent>.modal-dialog>.modal-content>.show').html(response.view);
                    loader.hide();
                    status.hide();
                    $('#editEvent').modal('show');
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
                           data-bs-target="#addEvent">Add Event</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($events as $key => $event)
                                    <tr>
                                        <td>{{ $events->firstItem() + $key }}</td>
                                        <td>
                                            <img src="{{ asset($event->thumbnail) }}" width="200" class="img-thumbnail">
                                        </td>
                                        <td>{{ $event->name }}</td>
                                        <td>{{ $event->date->format('d M Y h:i A') }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="m-2 btn btn-dark" onclick="edit({{$event->id}})">
                                                    Edit</a>
                                                <a href="{{ route('delete.event',$event->id) }}" class="m-2  btn btn-danger"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5" class="text-center">No Event Found!</td>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $events->links('pagination::bootstrap-5') }}
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container-fluid -->

    {{-- Add Modal --}}
    <div class="modal fade" id="addEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="addEventLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventLabel">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('store.event') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="name">Event Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Event Name"
                                   required>
                        </div>
                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" placeholder="Description.." class="form-control"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="date">Date</label>
                            <input type="datetime-local" name="date" id="date" class="form-control" placeholder="Event Date"
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
    <div class="modal fade" id="editEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="editEventLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEventLabel">Edit Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="show"></div>
            </div>
        </div>
    </div>
@endsection
