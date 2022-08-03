@extends('backend.layout.app')
@section('title', 'Galleries')
@section('from', 'Dashboard')
@push('js')
    <script>
        function edit(id) {
            loader.show();
            status.show();
            $.ajax({
                url: "{{ url('admin/edit-gallery') }}" + '/' + id,
                type: "GET",
                success: function (response) {
                    $('#editGallery>.modal-dialog>.modal-content>.show').html('');
                    $('#editGallery>.modal-dialog>.modal-content>.show').html(response.view);
                    loader.hide();
                    status.hide();
                    $('#editGallery').modal('show');
                },
                error: function (error) {
                    loader.hide();
                    status.hide();
                    alert('Sorry,something went wrong!');
                }
            })
        }


        $('#type').on('change',function(){
            if($(this).val() == 'video'){
                $('#link').parent().removeClass('d-none');
                $('#link').attr('required',true);
            }else{
                $('#link').parent().addClass('d-none');
                $('#link').attr('required',false);
            }
        });
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
                           data-bs-target="#addEvent">Add Gallery</a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($galleries as $key => $gallery)
                                    <tr>
                                        <td>{{ $galleries->firstItem() + $key }}</td>
                                        <td>
                                            {{ Str::ucfirst($gallery->type) }}
                                        </td>
                                        <td>{{ $gallery->title }}</td>
                                        <td>
                                            <img src="{{ asset($gallery->photo) }}" width="200" class="img-thumbnail">
                                        </td>
                                        <td>{{ $gallery->link ?? '---' }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="m-2 btn btn-dark" onclick="edit({{$gallery->id}})">
                                                    Edit</a>
                                                <a href="{{ route('delete.gallery',$gallery->id) }}" class="m-2  btn btn-danger"
                                                   onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5" class="text-center">No Gallery Found!</td>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $galleries->links('pagination::bootstrap-5') }}
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
                    <h5 class="modal-title" id="addEventLabel">Add Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('store.gallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="name">Gallery Type</label>
                            <select name="type" id="type" class="form-select">
                                <option value="photo" selected>Photo</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title.." required>
                        </div>
                        <div class="mb-2">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control" required>
                        </div>
                        <div class="mb-2 d-none">
                            <label for="link">Video Link</label>
                            <input type="url" name="link" id="link" class="form-control" placeholder="Video Link...">
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
    <div class="modal fade" id="editGallery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         role="dialog" aria-labelledby="editGalleryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalleryLabel">Edit Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="show"></div>
            </div>
        </div>
    </div>
@endsection
