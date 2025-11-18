@extends('themes.default.common.master')
@section('title',$data->post_type)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->banner)
@section('brief',$data->brief)
@section('content')
<section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="@if($data->page_thumbnail) {{ asset('uploads/original/' . $data->page_thumbnail) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif"  uk-img>
   <div class=" uk-padding-large uk-padding-remove-vertical">
      <div class="uk-padding">
         <h2 class="page-title uk-margin-remove uk-text-white">{{$data->post_title}}</h2>
         <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active"><span>{{$data->post_title}}</span></li>
         </ul>
      </div>
   </div>
   <div class="texture">
        <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
   </div>
</section>
 <!-- about us -->
@if($data_child)
    @foreach($data_child as $item)
        @if($loop->first)
            <section class="uk-section-padding  uk-about1 uk-margin-large-top@m ">
                <div class=" uk-container ">
                    <div class="uk-grid-large uk-child-width-1-1@s uk-text-justify" uk-grid>
                        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;" class="uk-flex uk-flex-center   uk-about-img-section" >
                            <div class=" uk-about-img "><img src="@if($item->page_thumbnail){{asset('uploads/original/'.$item->page_thumbnail)}}@else{{asset('themes-assets/images/default/default-banner.jpg')}}@endif" alt="" class="uk-border-rounded"></div>
                        </div>
                        <div uk-scrollspy="cls: uk-animation-slide-top-small;delay: 100; repeat: false;" class="uk-width-2-3@m">
                            <h2 class="uk-text-bold   uk-margin-remove-bottom uk-padding-remove-bottom"> {{$item->post_title}}</h2>
                            <p class="uk-text-bold">{!!$item->post_excerpt!!}</p>
                            <p>{!!$item->post_content!!}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if($loop->iteration == 2)
            <div class="middle-banner">
                <div class="top-texture" >
                    <img src="{{asset('themes-assets/images/shape-9.png')}}" alt="">
                </div>
                <section class="uk-section-padding  uk-middle-banner " style="background: var(--primary);">
                    <div class="uk-container">
                    <div class="uk-text-center"  uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;" >
                            <h2 class="uk-text-bold uk-margin-remove-bottom uk-margin-top uk-padding-remove-bottom uk-text-white">{{$item->post_title}}</h2>
                            <img src="{{asset('themes-assets/images/title-icon.png')}}" alt="">
                        </div>
                        <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                            <div class="uk-child-width-1-2@m uk-grid-match" uk-grid  uk-scrollspy="cls: uk-animation-slide-top-small; delay: 200; repeat: false;" >
                                @foreach($data_child_associated_post as $item)
                                    @foreach($item as $row)
                                        <div class="why-us-features">  
                                            <h3 class="main-title-font expedition-font text-white">{{$row->title}}</h3>
                                            {!!$row->brief!!}
                                        </div>
                                    @endforeach
                                @endforeach
                    </div>
                </div>
                    </div>
                </section>
                <div class="texture">
                    <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
                </div>
            </div>
        @endif
        @if($loop->iteration == 3)
            <section class="uk-section-padding  uk-about uk-margin-large-top@m ">
                <div class=" uk-container ">
                    <div class="uk-grid-large   uk-child-width-1-1@s uk-text-justify" uk-grid uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <div uk-scrollspy="cls: uk-animation-slide-top-small;delay: 100; repeat: false;" class="uk-width-2-3@m">
                            <h2 class="uk-text-bold   uk-margin-remove-bottom uk-padding-remove-bottom"> {{$item->post_title}}</h2>
                            <p class="uk-text-bold">{!!$item->post_excerpt!!}</p>
                            <p>{!!$item->post_content!!}</p>
                        </div>
                        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;" class="uk-flex uk-flex-center   uk-about-img-section" >
                            <div class=" uk-about-img "><img src="@if($item->page_thumbnail){{asset('uploads/original/'.$item->page_thumbnail)}}@else{{asset('themes-assets/images/default/default-banner.jpg')}}@endif" alt="" class="uk-border-rounded"></div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif
@stop