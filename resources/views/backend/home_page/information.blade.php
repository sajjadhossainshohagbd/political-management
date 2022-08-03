@extends('backend.layout.app')
@section('title', 'Information')
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
                                        <label for="home_page_video_link">Video Link</label>
                                        <input type="hidden" name="types[]" value="home_page_video_link">
                                        <input type="url" class="form-control" name="home_page_video_link" id="home_page_video_link"
                                            placeholder="Video Link" value="{{ setting('home_page_video_link') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_bg_thumbnail">Information Backgrond Thumbnail</label>
                                        <input type="hidden" name="types[]" value="information_bg_thumbnail">
                                        <input type="file" class="form-control" name="information_bg_thumbnail" id="information_bg_thumbnail"
                                            value="{{ setting('information_bg_thumbnail') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_title">Information Title</label>
                                        <input type="hidden" name="types[]" value="information_title">
                                        <input type="text" class="form-control" name="information_title" id="information_title"
                                            placeholder="Information Title" value="{{ setting('information_title') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_volunteer">Active Volunteer</label>
                                        <input type="hidden" name="types[]" value="information_volunteer">
                                        <input type="text" class="form-control" name="information_volunteer" id="information_volunteer"
                                            placeholder="Active Volunteer" value="{{ setting('information_volunteer') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_campaign_done">Campaign Done</label>
                                        <input type="hidden" name="types[]" value="information_campaign_done">
                                        <input type="text" class="form-control" name="information_campaign_done" id="information_campaign_done"
                                            placeholder="Campaign Done" value="{{ setting('information_campaign_done') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_area_coverage">AREA COVERAGE</label>
                                        <input type="hidden" name="types[]" value="information_area_coverage">
                                        <input type="text" class="form-control" name="information_area_coverage" id="information_area_coverage"
                                            placeholder="AREA COVERAGE" value="{{ setting('information_area_coverage') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="information_project_done">PROJECT DONE </label>
                                        <input type="hidden" name="types[]" value="information_project_done">
                                        <input type="text" class="form-control" name="information_project_done" id="information_project_done"
                                            placeholder="PROJECT DONE" value="{{ setting('information_project_done') }}">
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
