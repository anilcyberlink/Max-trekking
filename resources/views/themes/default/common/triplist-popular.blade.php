@extends('themes.default.common.master')
@section('content')
    <!-- HEADER START -->
    <section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="{{ asset('themes-assets/images/annapurna-trek.jpg') }}"  uk-img>
        <div class=" uk-padding-large uk-padding-remove-vertical">
            <div class="uk-padding">
            <h2 class="page-title uk-margin-remove uk-text-white">Our Popular Trips</h2>
            <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><span>Our Popular Trips</span></li>
            </ul>
            </div>       
        </div>
        <div class="texture">
            <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
        </div>
    </section>
    <!-- HEADER END -->
    <!-- section -->
    <section class="uk-section-padding">
        @if ($popular_trips->count() > 0)
            <div class=" uk-container ">
                <!-- list -->
                <div class="uk-clearfix"></div>
                <ul class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid uk-margin-top">
                    @foreach ($popular_trips as $item)
                        <li>
                            <!--  -->
                            <div class="uk-package-list">
                                <div class=" uk-card" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                                    <a href="{{ url('page/' . tripurl($item->uri)) }}">
                                        <div class="uk-card-media-top uk-image-200 uk-block">
                                            <img src="@if ($item->thumbnail) {{ asset('uploads/original/' . $item->thumbnail) }}@else{{ asset('themes-assets/images/default/default-thumbnail.png') }} @endif" alt="">
                                            <!--<div class="ribbon"> <span>USD</span>1,090</div>-->
                                        </div>
                                    </a>
                                    <div class="">
                                        <div class="uk-text-wrp">
                                            <h3 class="uk-title">{{ $item->trip_title }}</h3>
                                            <div class="uk-grid uk-child-width-1-2">
                                                @if($item->duration)
                                                    <p class="uk-meta "><span><i class="fa fa-clock-o uk-text-primary "></i></span>{{ $item->duration }} days</p>
                                                @endif
                                                @if($item->group_size)
                                                    <p class="uk-meta "><span><i class="fa fa fa-group uk-text-primary "></i></span>{{$item->group_size}} people</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- list -->
                <!-- pagination -->
                {!! $popular_trips->links('themes.default.common.pagination') !!}
                <!-- pagination -->

            </div>
        @endif
    </section>
@stop