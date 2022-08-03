@extends('backend.layout.app')
@section('title', 'Slider')
@section('from', 'Home Page')
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

                        <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="slider_title">Slider Title</label>
                                        <input type="hidden" name="types[]" value="slider_title">
                                        <input type="text" class="form-control" name="slider_title" id="slider_title"
                                            placeholder="Slider Title" value="{{ setting('slider_title') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="slider_desc">Slider Descripiton</label>
                                        <input type="hidden" name="types[]" value="slider_desc">
                                        <input type="text" class="form-control" name="slider_desc" id="slider_desc"
                                            placeholder="Slider Descripiton" value="{{ setting('slider_desc') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="leader_name">Leader Name</label>
                                        <input type="hidden" name="types[]" value="leader_name">
                                        <input type="text" class="form-control" name="leader_name" id="leader_name"
                                            placeholder="Leader Name" value="{{ setting('leader_name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="slider_background">Slider Background</label>
                                        <input type="hidden" name="types[]" value="slider_background">
                                        <input type="file" class="form-control" name="slider_background"
                                            id="slider_background" value="{{ setting('slider_background') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="slider_person">Slider Person</label>
                                        <input type="hidden" name="types[]" value="slider_person">
                                        <input type="file" class="form-control" name="slider_person" id="slider_person"
                                            value="{{ setting('slider_person') }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container-fluid -->
@endsection
