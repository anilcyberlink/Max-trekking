@extends('themes.default.common.master')
@section('title', $pages->page_type)
@section('brief', $pages->brief)
@section('thumbnail', $pages->image)
@section('meta_keyword', $pages->brief)
@section('meta_description', $pages->brief)
@section('content')
	<!-- banner -->
    <section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="@if($pages->image) {{ asset('uploads/original/' . $pages->image) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" uk-img>
    <div class=" uk-padding-large uk-padding-remove-vertical">
        <div class="uk-padding">
            <h2 class="page-title uk-margin-remove uk-text-white">{{$pages->page_type}}</h2>
            <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><span>{{$pages->page_type}}</span></li>
            </ul>
        </div>
    </div>
    <div class="texture">
			<img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
    </div>
</section>
	<!-- end banner -->
	<!-- section   -->
@if($details)
	<section class="uk-section bg-white uk-position-relative">
		<div class="uk-container  faq">
			<ul uk-accordion class="uk-accordion uk-accordion-outline">
				<!--  -->
				@foreach($details as $row)
					<li class="@if($loop->first)uk-open @endif">
						<div class=" uk-accordion-title">
							<p class=" text-primary uk-margin-remove faq-title">{{$loop->iteration}} - {{$row->title}}</p> </div>
						<div class="uk-accordion-content">
							{!!$row->content!!}
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</section>
	<!-- section  -->
@endif
@endsection