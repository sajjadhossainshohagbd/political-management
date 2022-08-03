@extends('frontend.app')

@section('title','Events')

@section('content')
<div data-elementor-type="wp-post" data-elementor-id="530" class="elementor elementor-530" style="padding-top: 190px">
    @include('frontend.inc.breadcumb',[ 'page' => 'Events'])
    <div class="elementor-inner mt-3">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-84a5271 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="84a5271" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5e3c58" data-id="b5e3c58" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-94379f4 elementor-widget elementor-widget-campaigns-post" data-id="94379f4" data-element_type="widget" data-widget_type="campaigns-post.default">
                                        <div class="elementor-widget-container">
                                            <div class="campaigns-area">
                                                <div class="row">
                                                    @forelse ($events as $event)
                                                    <div class="col-lg-4 col-sm-12">
                                                        <div class="campaign_style4">
                                                            <a href="{{ route('event.details',[$event->slug,$event->id]) }}">
                                                                <img loading="lazy" width="370" height="410" src="{{ asset($event->thumbnail) }}" class="attachment-wppolitic_img370x410 size-wppolitic_img370x410 wp-post-image" alt="">
                                                            </a>
                                                            <div class="wp_politic_content_st4">
                                                                <h3>
                                                                    <a href="{{ route('event.details',[$event->slug,$event->id]) }}">{{ $event->name }}</a>
                                                                </h3>
                                                                <ul>
                                                                    {{-- <li><i class="fa fa-map-marker"></i> Mirpur-1, Dhaka-1216</li> --}}
                                                                    <li><i class="fa fa-clock-o"></i> {{ $event->date->format('d M Y h:i A') }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty
                                                    <span class="text-center">No Event Found!</span>
                                                    @endforelse
                                                </div>
                                                {{ $events->links('pagination::bootstrap-4') }}
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
@endsection
