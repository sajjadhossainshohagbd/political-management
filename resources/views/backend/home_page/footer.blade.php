@extends('backend.layout.app')
@section('title', 'Footer')
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
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="footer_logo">Logo</label>
                                        <input type="hidden" name="types[]" value="footer_logo">
                                        <input type="file" class="form-control" name="footer_logo" id="footer_logo"
                                            value="{{ setting('footer_logo') }}">
                                        <img src="{{ asset(setting('footer_logo')) }}" width="100" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="fb_page_link">Fb Page Link</label>
                                        <input type="hidden" name="types[]" value="fb_page_link">
                                        <input type="url" class="form-control" name="fb_page_link" id="fb_page_link"
                                            value="{{ setting('fb_page_link') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="footer_description">Description</label>
                                        <input type="hidden" name="types[]" value="footer_description">
                                        <textarea name="footer_description" id="footer_description" class="form-control" cols="30" rows="3">{{  setting('footer_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="copyright_text">Copyright Text</label>
                                        <input type="hidden" name="types[]" value="copyright_text">
                                        <textarea name="copyright_text" id="copyright_text" class="form-control" cols="30" rows="3">{{  setting('copyright_text') }}</textarea>
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
