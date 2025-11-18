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
@if($data_child)
   @foreach($data_child as $item)
      <section class="uk-section">
         <div class="uk-container">
               <div  uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                  <div   >
                     <h2 class="main-title ">{{$item->post_title}}</h2>
                     <hr>
                  </div>
                  <div >
                     <p>{!!$item->post_content!!}</p>
                  </div>
               </div>
         </div>
      </section>
      <section class="uk-section uk-padding-remove-top">
         <div class="uk-container">
            <div class="uk-child-width-1-2@s  uk-child-width-1-3@l uk-flex-center " uk-grid uk-lightbox="animation: slide" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
               @foreach($data_child_images as $row)
                  @if($loop->iteration >3)
                  @continue
                  @endif
                  <div>
                     <div class="uk-media-500">
                        <a class="uk-inline" href="{{ asset('uploads/medium/' . $row->file_name) }}" data-caption="@if($row->caption){{$row->caption}}@endif" >
                        <img class="uk-image" alt="{{$row->title}}" uk-img src="@if($row->file_name) {{ asset('uploads/medium/' . $row->file_name) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" >
                        </a>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </section>
   @endforeach
@endif
@stop