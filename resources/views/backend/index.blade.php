@extends('backend.layout.app')
@section('title','Header')
@section('from','Home Page')
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
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="hidden" name="types[]" value="facebook_link">
                                    <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="Facebook Link" value="{{ setting('facebook_link') }}">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="hidden" name="types[]" value="twitter_link">
                                    <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="Twitter Link" value="{{ setting('twitter_link') }}">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label for="instagram_link">Instagram Link</label>
                                    <input type="hidden" name="types[]" value="instagram_link">
                                    <input type="text" class="form-control" name="instagram_link" id="instagram_link" placeholder="Instagram Link" value="{{ setting('instagram_link') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label for="phone">Phone</label>
                                    <input type="hidden" name="types[]" value="phone">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{ setting('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label for="email">Email Address</label>
                                    <input type="hidden" name="types[]" value="email">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" value="{{ setting('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-2">
                                    <label for="header_logo">Header Logo</label>
                                    <input type="hidden" name="types[]" value="header_logo">
                                    <input type="file" class="form-control" name="header_logo" id="header_logo" placeholder="Header Logo" value="{{ setting('email') }}">
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