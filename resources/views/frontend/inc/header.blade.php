<header class="header-default main-header clearfix hader_st_2 header-sticky header-transparent">
	<div class="header-area hader_st_2" style="background:#a9a9a9">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="header-menu-wrap logo-left">
						<div class="site-title">
							<a href="{{ url('/') }}/" title="{{ config('app.name') }}" rel="home"><img class="politicem_dft_logo" src="{{ asset(setting('header_logo')) }}" data-at2x="{{ url('') }}/wp-content/themes/politicem/frontend/images/logo2x.png" alt="Politic"> <img class="politicem_stc_logo" src="{{ asset(setting('header_logo')) }}" alt="{{ config('app.name') }}"> <img class="politicem_mbl_logo" src="{{ asset(setting('header_logo')) }}" alt="{{ config('app.name') }}"></a>
						</div>
						<div class="primary-nav-wrap nav-horizontal default-menu default-style-one">
							<nav>
								<ul id="menu-main-menu" class="menu">
									<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                                        <a href="{{ url('/') }}/">Home</a>
                                    </li>
                                    <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                                        <a href="{{ route('front.events') }}/">Events</a>
                                    </li>
                                    <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                                        <a href="{{ route('front.galleries') }}/">Galleries</a>
                                    </li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu"></div>
		</div>
	</div>
</header>
