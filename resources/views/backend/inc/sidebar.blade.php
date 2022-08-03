<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- <li>
                    <a href="{{ route('admin') }}">
                        <i class="uil-home-alt"></i>
                        <span>Home Page</span>
                    </a>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="uil-store"></i>
                        <span>Home</span>
                    </a>

                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin') }}">Header</a>
                            <a href="{{ route('slider') }}">Slider</a>
                            <a href="{{ route('mission.and.vision') }}">Mission & Vision</a>
                            <a href="{{ route('information') }}">Information</a>
                            <a href="{{ route('biography') }}">Biography</a>
                            <a href="{{ route('footer') }}">Footer</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('events') }}">
                        <i class="uil-clock-eight"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('galleries') }}">
                        <i class="fas fa-images"></i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('galleries') }}">
                        <i class="uil-blogger-alt"></i>
                        <span>Blog</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
