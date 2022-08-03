@extends('frontend.app')
@section('title')
{{ $event->name }}
@endsection
@section('content')
<section class="events-details-ara ptb-80" style="margin-top: 160px">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="wppolitic_campaign_content">
                    <img src="{{ asset($event->thumbnail) }}" width="100%" alt="Thumbnail" class="img-thumbnail mt-2">
					<h3>{{ $event->name }}</h3>
					<p>
                        {{ $event->description }}
                    </p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
