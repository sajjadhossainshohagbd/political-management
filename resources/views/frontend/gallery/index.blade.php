@extends('frontend.app')

@section('title')
    Galleries
@endsection
@section('content')
<div data-elementor-type="wp-post" data-elementor-id="576" class="elementor elementor-576" style="margin-top: 180px">
    @include('frontend.inc.breadcumb',[ 'page' => 'Galleries'])
	<div class="elementor-inner mt-2">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-6e890c9e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e890c9e" data-element_type="section">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-row">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f689c20" data-id="3f689c20" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-4286d458 elementor-widget elementor-widget-wppolitic-gallery-addons" data-id="4286d458" data-element_type="widget" data-widget_type="wppolitic-gallery-addons.default">
										<div class="elementor-widget-container">
											<div class="filter-area wplolitic_gallery_ars">
												<div class="ft_item-style">
													<div class="wppolitic_all_item_wrapper grid-active wid4286d458" style="position:relative;height:404.22px">
                                                        @foreach ($galleries as $gallery)
                                                        <div class="wppolitic-filter_item_box wppolitic-grid-item family video" style="position:absolute;left:24.958%;top:0">
															<div class="wppolitic-ft_item_image">
                                                                <a class="icon_link various fancybox.iframe?" href="{{ $gallery->type == 'photo' ? asset($gallery->photo) : embedCode($gallery->link) }}">

                                                                    <i aria-hidden="true" class="{{ $gallery->type == 'photo' ? 'fa fa-camera' : 'fa fa-video-camera'}}"></i>
                                                                </a>
                                                                <img width="640" height="420" src="{{ asset($gallery->photo) }}" class="attachment-large size-large wp-post-image" alt="" loading="lazy">
                                                            </div>
														</div>
                                                        @endforeach
													</div>
												</div>
											</div>
											<style>
                                                .wid4286d458.wppolitic_all_item_wrapper {
                                                    margin: -10px
                                                }

                                                .wid4286d458 .wppolitic-filter_item_box {
                                                    padding: 10px
                                                }

                                                .wid4286d458 .wppolitic-filter_item_box {
                                                    width: 25%
                                                }

                                                @media only screen and (min-width:768px) and (max-width:991px) {
                                                    .wid4286d458 .wppolitic-filter_item_box {
                                                        width: 33.333333333333%
                                                    }
                                                }

                                                @media (max-width:767px) {
                                                    .wid4286d458 .wppolitic-filter_item_box {
                                                        width: 50%
                                                    }
                                                }

                                                @media (max-width:575px) {
                                                    .wid4286d458 .wppolitic-filter_item_box {
                                                        width: 100%
                                                    }
                                                }
											</style>
											<script type="text/javascript">
											jQuery(document).ready(function(i) {
												i(".wppolitic_all_item_wrapper").imagesLoaded(function() {
													i(".wppolitic-filter-menu-list.wid4286d458").on("click", "button", function() {
														var e = i(this).attr("data-filter");
														t.isotope({
															filter: e
														})
													});
													var t = i(".grid-active.wid4286d458").isotope({
														itemSelector: ".wppolitic-grid-item",
														percentPosition: !0,
														masonry: {
															columnWidth: ".wppolitic-grid-item"
														}
													});
													i(".wppolitic-filter-menu-list button").on("click", function(t) {
														i(this).siblings(".is-checked").removeClass("is-checked"), i(this).addClass("is-checked"), t.preventDefault()
													}), i(".wppolitc_popup").fancybox(), i(".various").fancybox({
														maxWidth: 800,
														maxHeight: 600,
														fitToView: !1,
														width: "70%",
														height: "70%",
														autoSize: !1,
														closeClick: !1,
														openEffect: "none",
														closeEffect: "none"
													})
												})
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
		</div>
	</div>
</div>
@endsection
