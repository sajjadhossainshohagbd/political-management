@extends('backend.layout.app')
@section('title', 'Mission & Vision')
@section('from', 'Home Page')
@push('js')
    <script>
        function edit(id) {
            loader.show();
            status.show();
            $.ajax({
                url: "{{ url('admin/edit-mission-and-vision') }}" + '/' + id,
                type: "GET",
                success: function (response) {
                    $('#editMissionVision>.modal-dialog>.modal-content>.show').html('');
                    $('#editMissionVision>.modal-dialog>.modal-content>.show').html(response.view);
                    loader.hide();
                    status.hide();
                    $('#editMissionVision').modal('show');
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
                           data-bs-target="#addMissionVision">Add Mission & Vision</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($missions as $mission)
                                    <tr>
                                        <td>{{ Str::ucfirst($mission->type) }}</td>
                                        <td>{{ $mission->title }}</td>
                                        <td>{{ $mission->description }}</td>
                                        <td>{{ $mission->percentage }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="m-2 btn btn-dark" onclick="edit({{$mission->id}})">
                                                    Edit</a>
                                                <a href="{{ route('delete.mission.and.vision',$mission->id) }}" class="m-2  btn btn-danger"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5" class="text-center">No Mission or Vision Found!</td>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $missions->links('pagination::bootstrap-5') }}
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container-fluid -->

    {{-- Add Modal --}}
    <div class="modal fade" id="addMissionVision" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="addMissionVisionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMissionVisionLabel">Add Mission & Vision</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('store.mission.and.vision') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="title">Type</label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="" selected disabled>Select Type</option>
                                <option value="mission">Mission</option>
                                <option value="vision">Vision</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                   required>
                        </div>
                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description"
                                      cols="30" rows="10" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="percentage">Percentage (%)</label>
                            <input type="number" name="percentage" id="percentage" max="100" placeholder="Percentage"
                                   class="form-control" required>
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
    <div class="modal fade" id="editMissionVision" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="editMissionVisionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMissionVisionLabel">Edit Mission & Vision</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="show"></div>

            </div>
        </div>
    </div>
@endsection
