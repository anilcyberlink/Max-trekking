@extends('themes.default.common.master')
@section('title', $pages->page_type)
@section('brief', $pages->brief)
@section('thumbnail', $pages->image)
@section('meta_keyword', $pages->brief)
@section('meta_description', $pages->brief)
@section('content')

<section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="@if($pages->image) {{ asset('uploads/original/' . $pages->image) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" uk-img>
    <div class=" uk-padding-large uk-padding-remove-vertical">
        <div class="uk-padding">
            <h2 class="page-title uk-margin-remove uk-text-white">{{$pages->page_type}} </h2>
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


<section class="uk-section-padding ">
    <div class=" uk-container  uk-trips">

        <div class="uk-text-left " uk-grid>
            @include('themes.default.common.sidebar-single')

            @if($data)
                @if($details)
                    <div class="uk-width-expand@m">
                        <div class="uk-card uk-card-default clearfix ">
                            <div class="uk-card-body uk-single-page uk-padding ">
                                <h3>{{$data->page_title}}</h3>
                                <ol class=" uk-padding uk-padding-remove-vertical">
                                    @foreach($details as $row)
                                        <li>
                                            <strong>{{$row->title}}</strong>
                                            {!!$row->content!!}
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>

    </div>
</section>
@endsection