@extends('frontend.app')

@push('js')
<script>

    $('.wppolitic_popup-youtube').on('click',function(){
        $('.mfp-iframe').attr('src','{{ iframe_link() }}');

    });
</script>
@endpush
@section('content')
<div data-elementor-type="wp-post" data-elementor-id="823" class="elementor elementor-823" style="margin-top: 168px">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b58c000 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="b58c000" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a7effc"
                            data-id="6a7effc" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-1bc4498 wppolitic-fulscreen-slider elementor-widget elementor-widget-wppolitic-slider"
                                        data-id="1bc4498" data-element_type="widget"
                                        data-widget_type="wppolitic-slider.default">
                                        <div class="elementor-widget-container">
                                            <!-- Slider Section Start -->
                                            <div class="wppolitic-slider-area dot_bottom_left">
                                                <div
                                                    class="wppolitic-slider-active 1bc4498 owl-theme owl-carousel">
                                                    <!-- Slider Single -->
                                                    <div class="wppolitic-slider-item"
                                                        style="background-image: url({{ asset(setting('slider_background')) }});"
                                                        data-dot="&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-dot-circle-o&quot;&gt;&lt;/i&gt;">

                                                        <div class="container">
                                                            <div class="row">
                                                                <div
                                                                    class="wppolitic-slide-content col-md-6">
                                                                    <h1>{{ setting('slider_title') }}</h1>
                                                                    <p>{{ setting('slider_desc') }}</p>
                                                                    <div class="wppolitic-slide-btn">
                                                                        <a
                                                                            class="read-more" href
                                                                            target="_blank"
                                                                            rel="nofollow">

                                                                        <span>-- </span> {{ setting('leader_name') }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wppolitic-slide-frnt-img col-md-6">
                                                                    <div
                                                                        class="wppolitic-slid-img-right">

                                                                        <img src="{{ asset(setting('slider_person')) }}"
                                                                            alt>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Slider Single -->
                                                </div>
                                            </div>
                                            <!-- Slider Section End -->

                                            <script data-cfasync="false" src="frontend/js/email-decode.min.js">
                                            </script>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {

                                                    // images have loaded
                                                    $('.wppolitic-slider-active').imagesLoaded(
                                                        function () {

                                                            var _arrows_set = false;
                                                            var _autoplay_set = true;
                                                            var _sl_loop_set = true;
                                                            var _autoplay_speed = 500000;
                                                            var _slide_speed = 2000;
                                                            var _dots_set = true;

                                                            $('.wppolitic-slider-active.1bc4498')
                                                                .owlCarousel({
                                                                    items: 1,
                                                                    loop: _sl_loop_set,
                                                                    margin: 0,
                                                                    autoHeight: true,
                                                                    dots: _dots_set,
                                                                    dotsData: true,
                                                                    nav: _arrows_set,
                                                                    autoplay: _autoplay_set,
                                                                    autoplayTimeout: _autoplay_speed,
                                                                    smartSpeed: _slide_speed,
                                                                    navText: [
                                                                        '<span>Prev</span><img src="" alt="wppolitic" />',
                                                                        '<span>Next</span><img src="" alt="wppolitic" />'
                                                                    ],

                                                                });

                                                        });

                                                });

                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-83678c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="83678c6" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0dd5c7c"
                            data-id="0dd5c7c" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-b4a01aa elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                        data-id="b4a01aa" data-element_type="widget"
                                        data-widget_type="wppolitic-section-titel-addons.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="wppolitic-section-titel default-style text-left">
                                                <h4 class="section-sub-titel-txt">My Vision & Mission
                                                </h4>
                                                <h3 class="wppolitic-section-titel-txt">What I
                                                    <span>Believe</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b1fd9c7 elementor-widget elementor-widget-htmega-tab-addons"
                                        data-id="b1fd9c7" data-element_type="widget"
                                        data-widget_type="htmega-tab-addons.default">
                                        <div class="elementor-widget-container">
                                            <div class="htmega-tab-area htmega-tab-style-2">

                                                <div class="htmega-tab-nav htb-nav htmega-tab-menu-style-2"
                                                    role="tablist">
                                                    <a class="htb-nav-link htb-active htb-show elementor-repeater-item-2de872c"
                                                        href="#htmegatab-b1fd9c71" data-toggle="htbtab"
                                                        role="tab">VISION</a><a
                                                        class="htb-nav-link  elementor-repeater-item-6514e69"
                                                        href="#htmegatab-b1fd9c72" data-toggle="htbtab"
                                                        role="tab">MISSION</a> </div>

                                                <div class="htmega-tab-content-area htb-tab-content">
                                                    <div class="htmega-single-tab htb-tab-pane htb-fade htb-active htb-show elementor-repeater-item-2de872c"
                                                        id="htmegatab-b1fd9c71" role="tabpanel">
                                                        <div class="htmega-tab-content">
                                                            <div data-elementor-type="section"
                                                                data-elementor-id="1470"
                                                                class="elementor elementor-1470">
                                                                <div class="elementor-inner">
                                                                    <div class="elementor-section-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-3e78fa1d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="3e78fa1d"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div
                                                                                    class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b2fd5ce"
                                                                                        data-id="1b2fd5ce"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                @foreach (my_mission_vision('vision')->chunk(2) as $visions)
                                                                                                <section
                                                                                                    class="elementor-section mb-2 elementor-inner-section elementor-element elementor-element-7917b67c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                                                    data-id="7917b67c"
                                                                                                    data-element_type="section">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-default">
                                                                                                        <div
                                                                                                            class="elementor-row">
                                                                                                            @foreach ($visions as $vision)
                                                                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-32bd4d2e"
                                                                                                                    data-id="32bd4d2e"
                                                                                                                    data-element_type="column">
                                                                                                                    <div
                                                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                                                        <div
                                                                                                                            class="elementor-widget-wrap">
                                                                                                                            <div class="elementor-element elementor-element-214e51f6 elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                                                                                                                data-id="214e51f6"
                                                                                                                                data-element_type="widget"
                                                                                                                                data-widget_type="wppolitic-section-titel-addons.default">
                                                                                                                                <div
                                                                                                                                    class="elementor-widget-container">
                                                                                                                                    <div
                                                                                                                                        class="wppolitic-section-titel default-style text-left">
                                                                                                                                        <h3
                                                                                                                                            class="wppolitic-section-titel-txt">
                                                                                                                                            {{ $vision->title }}
                                                                                                                                        </h3>
                                                                                                                                        <p>
                                                                                                                                            {{ $vision->description }}}
                                                                                                                                        </p>
                                                                                                                                    </div>

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-51b7f9b3 elementor-widget elementor-widget-wppolitic_progress"
                                                                                                                                data-id="51b7f9b3"
                                                                                                                                data-element_type="widget"
                                                                                                                                data-widget_type="wppolitic_progress.default">
                                                                                                                                <div
                                                                                                                                    class="elementor-widget-container">

                                                                                                                                    <div
                                                                                                                                        class="wppolitic-single-skill clearfix">
                                                                                                                                        <span
                                                                                                                                            class="wppolitic-title">Now
                                                                                                                                            This
                                                                                                                                            Time</span>
                                                                                                                                        <span
                                                                                                                                            class="wppolitic-percent">({{ $vision->percentage }}%)</span>
                                                                                                                                        <div
                                                                                                                                            class="wppolitic-progress progress">
                                                                                                                                            <div class="wow fadeInLeft bar bg-dark"
                                                                                                                                                style="width: {{ $vision->percentage }}%; background-color:#e03927!important;">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            @endforeach
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="htmega-single-tab htb-tab-pane htb-fade  elementor-repeater-item-6514e69"
                                                        id="htmegatab-b1fd9c72" role="tabpanel">
                                                        <div class="htmega-tab-content">
                                                            <div data-elementor-type="section"
                                                                data-elementor-id="1473"
                                                                class="elementor elementor-1473">
                                                                <div class="elementor-inner">
                                                                    <div class="elementor-section-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-1446c15f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="1446c15f"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div
                                                                                    class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-250fa81d"
                                                                                        data-id="250fa81d"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                @foreach (my_mission_vision('mission')->chunk(2) as $missions)
                                                                                                <section
                                                                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6c150667 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                                                    data-id="6c150667"
                                                                                                    data-element_type="section">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-default">
                                                                                                        <div
                                                                                                            class="elementor-row">
                                                                                                            @foreach ($missions as $mission)
                                                                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-192562af"
                                                                                                                data-id="192562af"
                                                                                                                data-element_type="column">
                                                                                                                <div
                                                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-wrap">
                                                                                                                        <div class="elementor-element elementor-element-4a6099bb elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                                                                                                            data-id="4a6099bb"
                                                                                                                            data-element_type="widget"
                                                                                                                            data-widget_type="wppolitic-section-titel-addons.default">
                                                                                                                            <div
                                                                                                                                class="elementor-widget-container">
                                                                                                                                <div
                                                                                                                                    class="wppolitic-section-titel default-style text-left">
                                                                                                                                    <h3
                                                                                                                                        class="wppolitic-section-titel-txt">
                                                                                                                                        {{ $mission->title }}
                                                                                                                                    </h3>
                                                                                                                                    <p>
                                                                                                                                        {{ $mission->description }}
                                                                                                                                    </p>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-element elementor-element-1cd2144a elementor-widget elementor-widget-wppolitic_progress"
                                                                                                                            data-id="1cd2144a"
                                                                                                                            data-element_type="widget"
                                                                                                                            data-widget_type="wppolitic_progress.default">
                                                                                                                            <div
                                                                                                                                class="elementor-widget-container">

                                                                                                                                <div
                                                                                                                                    class="wppolitic-single-skill clearfix">
                                                                                                                                    <span
                                                                                                                                        class="wppolitic-title">The
                                                                                                                                        next
                                                                                                                                        we
                                                                                                                                        believe</span>
                                                                                                                                    <span
                                                                                                                                        class="wppolitic-percent">({{ $mission->percentage }}%)</span>
                                                                                                                                    <div
                                                                                                                                        class="wppolitic-progress progress">
                                                                                                                                        <div class="wow fadeInLeft bar bg-dark"
                                                                                                                                            style="width: {{ $mission->percentage }}%; background-color:#e03927!important;">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            @endforeach
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4b4888c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4b4888c" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url('{{ setting('information_bg_thumbnail') }}');background-repeat: no-repeat;background-size:cover">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7480680"
                            data-id="7480680" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-e0ac9db elementor-widget elementor-widget-Video-addons"
                                        data-id="e0ac9db" data-element_type="widget"
                                        data-widget_type="Video-addons.default">
                                        <div class="elementor-widget-container">
                                            <div class="aboutus-area text-center">
                                                <div class="aboutus-video"
                                                    style="background: rgba(0, 0, 0, 0) url('') no-repeat scroll;">
                                                    <div class="video-content wppolitic">
                                                        <a href class="wppolitic_popup-youtube">
                                                            <img src="frontend/images/video-play-icon.png" alt>
                                                        </a>
                                                        <h4>{{ setting('information_title') }}</h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-73a9097 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="73a9097" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6220b85"
                            data-id="6220b85" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-d1c2318 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d1c2318" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-91245a4"
                                                    data-id="91245a4" data-element_type="column">
                                                    <div
                                                        class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-7333a66 elementor-widget elementor-widget-htmega-counter-addons"
                                                                data-id="7333a66"
                                                                data-element_type="widget"
                                                                data-widget_type="htmega-counter-addons.default">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="htmega-counter-area htmega-counter-style-2 htmega-countericon-align-left">
                                                                        <div
                                                                            class="htmega-counter-content">
                                                                            <span
                                                                                class="htmega-counter-number">{{ setting('information_volunteer') }}</span>
                                                                                {{-- <span
                                                                                class="htmega-suffix">K</span> --}}
                                                                            <h2
                                                                                class="htmega-counter-title">
                                                                                Active Volunteer</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6f78131"
                                                    data-id="6f78131" data-element_type="column">
                                                    <div
                                                        class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-0fa2da2 elementor-widget elementor-widget-htmega-counter-addons"
                                                                data-id="0fa2da2"
                                                                data-element_type="widget"
                                                                data-widget_type="htmega-counter-addons.default">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="htmega-counter-area htmega-counter-style-2 htmega-countericon-align-left">
                                                                        <div
                                                                            class="htmega-counter-content">
                                                                            <span
                                                                                class="htmega-counter-number">{{ setting('information_campaign_done') }}</span>
                                                                            <h2
                                                                                class="htmega-counter-title">
                                                                                Campaign Done</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bdfc09b"
                                                    data-id="bdfc09b" data-element_type="column">
                                                    <div
                                                        class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-153dfd4 elementor-widget elementor-widget-htmega-counter-addons"
                                                                data-id="153dfd4"
                                                                data-element_type="widget"
                                                                data-widget_type="htmega-counter-addons.default">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="htmega-counter-area htmega-counter-style-2 htmega-countericon-align-left">
                                                                        <div
                                                                            class="htmega-counter-content">
                                                                            <span
                                                                                class="htmega-counter-number">{{ setting('information_area_coverage') }}</span>
                                                                            <h2
                                                                                class="htmega-counter-title">
                                                                                Area Coverage</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8b7b3c4"
                                                    data-id="8b7b3c4" data-element_type="column">
                                                    <div
                                                        class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-d9e6008 elementor-widget elementor-widget-htmega-counter-addons"
                                                                data-id="d9e6008"
                                                                data-element_type="widget"
                                                                data-widget_type="htmega-counter-addons.default">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="htmega-counter-area htmega-counter-style-2 htmega-countericon-align-left">
                                                                        <div
                                                                            class="htmega-counter-content">
                                                                            <span
                                                                                class="htmega-counter-number">{{ setting('information_project_done') }}</span>
                                                                                {{-- <span
                                                                                class="htmega-suffix">K</span> --}}
                                                                            <h2
                                                                                class="htmega-counter-title">
                                                                                Project Done</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e0949bd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e0949bd" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d135631"
                            data-id="d135631" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-39ce2df elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                        data-id="39ce2df" data-element_type="widget"
                                        data-widget_type="wppolitic-section-titel-addons.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="wppolitic-section-titel default-style text-left">
                                                <h4 class="section-sub-titel-txt">My Strength</h4>
                                                <h3 class="wppolitic-section-titel-txt">Upcoming
                                                    <span>Event</span></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d2ba97c elementor-widget elementor-widget-campaigns-post"
                                        data-id="d2ba97c" data-element_type="widget"
                                        data-widget_type="campaigns-post.default">
                                        <div class="elementor-widget-container">
                                            <div class="campaigns-area">
                                                <!-- Campaign New Style Start -->
                                                <div
                                                    class="campaign_new_style wppolitic_indicator-style-two">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div
                                                                class="slider wppolitic_slider_for sidd2ba97c">

                                                                @foreach ($events as $event)

                                                                <div class="wppolitic_single_event_5">
                                                                    <a
                                                                        href="{{ route('event.details',[$event->slug,$event->id]) }}">
                                                                        <img loading="lazy" width="500"
                                                                            height="425"
                                                                            src="{{ asset($event->thumbnail) }}"
                                                                            class="img-thumbnail"
                                                                            alt> </a>

                                                                    <div class="wppolitic_event_meta_5">
                                                                        <span class="date">{{ $event->date->format('d M Y h:i A') }}</span>
                                                                    </div>
                                                                    <div class="wppolitic_event_desc_5">
                                                                        {{-- <h5> life Style </h5> --}}

                                                                        <h3><a
                                                                                href="{{ route('event.details',[$event->slug,$event->id]) }}">{{ $event->name }}</a></h3>
                                                                    </div>
                                                                </div>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div
                                                                class="slider wppolitic_slider_nav sidd2ba97c">

                                                                @foreach ($events as $event)
                                                                <div class="wppolitic_single_event_5">
                                                                    <img width="770" height="425"
                                                                        src="{{ asset($event->thumbnail) }}"
                                                                        class="attachment-politic_event_img_size size-politic_event_img_size wp-post-image"
                                                                        alt loading="lazy">
                                                                    <div class="wppolitic_event_meta_5">
                                                                        <span class="date">{{ $event->date->format('d M Y h:i A') }}</span>
                                                                    </div>
                                                                    <div class="wppolitic_event_desc_5">
                                                                        {{-- <h5> life Style </h5> --}}
                                                                        <h3>{{ $event->name }}</h3>
                                                                    </div>
                                                                </div>
                                                                @endforeach


                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- Campaign New Style Start -->



                                            </div>




                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {

                                                    var _arrows_set = true;
                                                    var _autoplay_set = false;
                                                    var _autoplay_speed = 5000;
                                                    var _showitem_set = 2;
                                                    var _showitemtablet_set = 2;
                                                    var _showitemmobile_set = 1;
                                                    $('.campaign-active.sidd2ba97c').slick({
                                                        slidesToShow: _showitem_set,
                                                        arrows: _arrows_set,
                                                        dots: false,
                                                        autoplay: _autoplay_set,
                                                        autoplaySpeed: _autoplay_speed,
                                                        prevArrow: '<div class="btn-prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>',
                                                        nextArrow: '<div><i aria-hidden="true" class="fa fa-angle-right"></i></div>',
                                                        responsive: [{
                                                                breakpoint: 991,
                                                                settings: {
                                                                    slidesToShow: _showitemtablet_set
                                                                }
                                                            },
                                                            {
                                                                breakpoint: 768,
                                                                settings: {
                                                                    slidesToShow: _showitemmobile_set
                                                                }
                                                            },
                                                            {
                                                                breakpoint: 575,
                                                                settings: {
                                                                    slidesToShow: 1
                                                                }
                                                            }
                                                        ]
                                                    });

                                                    $('.wppolitic_slider_for.sidd2ba97c')
                                                .slick({
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1,
                                                        arrows: false,
                                                        fade: true,
                                                        asNavFor: '.wppolitic_slider_nav'
                                                    });
                                                    $('.wppolitic_slider_nav.sidd2ba97c')
                                                .slick({
                                                        slidesToShow: _showitem_set,
                                                        slidesToScroll: 1,
                                                        asNavFor: '.wppolitic_slider_for.sidd2ba97c',
                                                        dots: false,
                                                        arrows: _arrows_set,
                                                        autoplay: _autoplay_set,
                                                        autoplaySpeed: _autoplay_speed,
                                                        vertical: true,
                                                        centerMode: false,
                                                        focusOnSelect: true,
                                                        focusOnSelect: true,
                                                        prevArrow: '<div class="btn-prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>',
                                                        nextArrow: '<div><i aria-hidden="true" class="fa fa-angle-right"></i></div>',
                                                    });

                                                });

                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-22a8704 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="22a8704" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url('');background-color:salmon">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d8a23f4"
                            data-id="d8a23f4" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-4ba49f6 elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                        data-id="4ba49f6" data-element_type="widget"
                                        data-widget_type="wppolitic-section-titel-addons.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="wppolitic-section-titel default-style text-center">
                                                <h3 class="wppolitic-section-titel-txt">SHORT BIOGRAPHY
                                                </h3>
                                                {{-- <p>There are many variations of passages of Lorem Ipsum
                                                    available, but the majority <br>have suffered
                                                    alteration in some form, by injected humour.
                                                </p> --}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f7cbbac elementor-widget elementor-widget-wppolitic-political-timeline"
                                        data-id="f7cbbac" data-element_type="widget"
                                        data-widget_type="wppolitic-political-timeline.default">
                                        <div class="elementor-widget-container">


                                            <div class="wppolitic_timeline-wrap">
                                                <span class="wppolitic_timeline-proces"></span>

                                                @foreach ($biographies as $biography)
                                                <div class="wppolitic_timeline row">
                                                    <!-- Date -->
                                                    <div class="date col-md-6">
                                                        <span class="dot"></span>
                                                        <h4>{{ $biography->date->format('d M Y') }}</h4>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="wppolitic_tm-content col-md-6">
                                                        <h4>{{ $biography->title }}</h4>

                                                        <p>{{ $biography->description }}</p>

                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c7b814f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="c7b814f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b6a323f"
                            data-id="b6a323f" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-bfe06dd elementor-widget elementor-widget-wppolitic-section-titel-addons"
                                        data-id="bfe06dd" data-element_type="widget"
                                        data-widget_type="wppolitic-section-titel-addons.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="wppolitic-section-titel default-style text-left">
                                                <h4 class="section-sub-titel-txt">OUR Vision & MISSION
                                                </h4>
                                                <h3 class="wppolitic-section-titel-txt">Politic
                                                    <span>News</span></h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-13170cd elementor-widget elementor-widget-latest-blog-post"
                                        data-id="13170cd" data-element_type="widget"
                                        data-widget_type="latest-blog-post.default">
                                        <div class="elementor-widget-container">
                                            <div class="latest-blog-area  ">
                                                <div
                                                    class="pro-latest-news-active 13170cd wppolitic_indicator-style-two">
                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/our-president-has-complex-fight-against-corruption/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/5-min.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/5-min.jpg 1170w, frontend/images/5-min-300x197.jpg 300w, frontend/images/5-min-768x504.jpg 768w, frontend/images/5-min-1024x672.jpg 1024w, frontend/images/5-min-268x175.jpg 268w, frontend/images/5-min-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/our-president-has-complex-fight-against-corruption/">
                                                                        Our president has complex fight
                                                                        against corruption </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/public-sentiment-is-everything/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/7.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/7.jpg 1170w, frontend/images/7-300x197.jpg 300w, frontend/images/7-768x504.jpg 768w, frontend/images/7-1024x672.jpg 1024w, frontend/images/7-268x175.jpg 268w, frontend/images/7-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/public-sentiment-is-everything/">
                                                                        Public Sentiment Is Everything
                                                                    </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/how-to-win-an-impeachment/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/4-min.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/4-min.jpg 1170w, frontend/images/4-min-300x197.jpg 300w, frontend/images/4-min-768x504.jpg 768w, frontend/images/4-min-1024x672.jpg 1024w, frontend/images/4-min-268x175.jpg 268w, frontend/images/4-min-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/how-to-win-an-impeachment/">
                                                                        How to win an impeachment </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/what-do-we-want/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/3-min.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/3-min.jpg 1170w, frontend/images/3-min-300x197.jpg 300w, frontend/images/3-min-768x504.jpg 768w, frontend/images/3-min-1024x672.jpg 1024w, frontend/images/3-min-268x175.jpg 268w, frontend/images/3-min-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/what-do-we-want/">
                                                                        What do we want? </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/contrary-to-popular-belief-lorem-ipsum/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/1-min.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/1-min.jpg 1170w, frontend/images/1-min-300x197.jpg 300w, frontend/images/1-min-768x504.jpg 768w, frontend/images/1-min-1024x672.jpg 1024w, frontend/images/1-min-268x175.jpg 268w, frontend/images/1-min-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/contrary-to-popular-belief-lorem-ipsum/">
                                                                        Contrary to popular belief,
                                                                        Lorem Ipsum </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="custom_row">

                                                        <div class="wppolitic_single_news">
                                                            <div class="wppolitic-news-thumbnail">
                                                                <a
                                                                    href="{{ url('') }}/hampden-sydney-college-in-virginia/">
                                                                    <img width="1170" height="768"
                                                                        src="frontend/images/2-min.jpg"
                                                                        class="attachment-wppoliticsize_570x380 size-wppoliticsize_570x380 wp-post-image"
                                                                        alt loading="lazy"
                                                                        srcset="frontend/images/2-min.jpg 1170w, frontend/images/2-min-300x197.jpg 300w, frontend/images/2-min-768x504.jpg 768w, frontend/images/2-min-1024x672.jpg 1024w, frontend/images/2-min-268x175.jpg 268w, frontend/images/2-min-120x80.jpg 120w"
                                                                        sizes="(max-width: 1170px) 100vw, 1170px">
                                                                </a>
                                                            </div>
                                                            <div class="wppolitic-news-content">
                                                                <h4>
                                                                    <a
                                                                        href="{{ url('') }}/hampden-sydney-college-in-virginia/">
                                                                        Hampden-Sydney College in
                                                                        Virginia </a>
                                                                </h4>

                                                                <div class="wppolitic_news-meta">

                                                                    <span>
                                                                        <i class="fa fa-calendar"></i>
                                                                        January 1, 2019 </span>
                                                                    <span>
                                                                        <i class="fa fa-comment"></i>
                                                                        0 </span>
                                                                    <span>
                                                                        <i class="fa fa-user"></i>
                                                                        <a
                                                                            href="{{ url('') }}/author/politicem/">politicem</a>
                                                                    </span>
                                                                </div>


                                                            </div>
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>

                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {

                                                    var _arrows_set = true;
                                                    var _caseldots_set = false;
                                                    var _autoplay_set = true;
                                                    var _autoplay_speed = 5000;
                                                    var _showitem_set = 3;
                                                    var _showitemtablet_set = 2;
                                                    var _showitemmobile_set = 1;
                                                    $('.pro-latest-news-active.13170cd').slick({
                                                        slidesToShow: _showitem_set,
                                                        arrows: _arrows_set,
                                                        dots: _caseldots_set,
                                                        autoplay: _autoplay_set,
                                                        autoplaySpeed: _autoplay_speed,
                                                        prevArrow: '<div class="btn-prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>',
                                                        nextArrow: '<div><i aria-hidden="true" class="fa fa-angle-right"></i></div>',
                                                        responsive: [{
                                                                breakpoint: 991,
                                                                settings: {
                                                                    slidesToShow: _showitemtablet_set
                                                                }
                                                            },
                                                            {
                                                                breakpoint: 768,
                                                                settings: {
                                                                    slidesToShow: _showitemmobile_set
                                                                }
                                                            },
                                                            {
                                                                breakpoint: 575,
                                                                settings: {
                                                                    slidesToShow: 1,
                                                                }
                                                            }
                                                        ]
                                                    });

                                                });

                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </div>
</div>
@endsection
