@extends('themes.default.common.master')
@section('title',$data->title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->thumbnail)
@section('brief',$data->brief)
@section('content')
<section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="@if($data->banner){{ asset('uploads/medium/' . $data->banner) }}@else{{asset('themes-assets/images/default/default-banner.jpg')}}@endif" class="uk-image" alt="{{$data->post_type}}" uk-img>
    <div class=" uk-padding-large uk-padding-remove-vertical">
        <div class="uk-padding">
            <h2 class="page-title uk-margin-remove uk-text-white">{{$data->post_type}}</h2>
            <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><span>{{$data->post_type}}</span></li>
            </ul>
        </div>
    </div>
    <div class="texture">
        <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
    </div>
</section>

<section class="uk-section pattern-mountain">
    <div class=" uk-container  ">
        <div class="uk-text-left uk-grid-match" uk-grid>
            <div class="uk-width-expand@m">
                <div class="uk-card uk-card-default clearfix ">
                    
                    <iframe src="{!!$setting->google_map!!}" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-card uk-card-default uk-padding-small clearfix">
                    <div class="uk-card-body ">
                        <h2>{{$data->post_type}}</h2>
                        @if($data->content)
                            <p class="">{!!$data->content!!}</p>
                        @endif
                        @if($setting->address)
                            <div class="uk-flex uk-margin-bottom uk-margin-top-large">
                                <span class="contact-box"><i class="fa fa-map-marker "></i></span>
                                <div>
                                    <h3 class="uk-margin-remove">Visit Us</h3>
                                    <p class="uk-margin-remove">{{$setting->address}}</p>
                                </div>
                            </div>
                        @endif
                        @if($setting->phone)
                            <div class="uk-flex  uk-margin-bottom">
                                <span class="contact-box"><i class="fa fa-phone "></i></span>
                                <div>
                                    <h3 class="uk-margin-remove">Call Us</h3>
                                    <p class="uk-margin-remove">{{$setting->phone}}</p>
                                </div>
                            </div>
                        @endif
                        @if($setting->email_primary)
                            <div class="uk-flex ">
                                <span class="contact-box"> <i class="fa fa-envelope "></i> </span>
                                <div>
                                    <h3 class="uk-margin-remove">Email Us</h3>
                                    <p class="uk-margin-remove">{{$setting->email_primary}}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- <div class="uk-card uk-card-default uk-margin-bottom uk-padding-small clearfix">
                    <div class="uk-card-body ">
                        <h4 class="uk-text-center">Follow us on Social Media</h4>
                        <div class="uk-margin-top uk-flex uk-flex-middle uk-flex-center">
                            <a href=" " class="uk-icon-button uk-facebook  uk-margin-small-right" uk-icon="facebook"></a>
                            <a href=" " class="uk-icon-button uk-twitter uk-margin-small-right" uk-icon="twitter"></a>
                            <a href=" " class="uk-icon-button uk-google-plus uk-margin-small-right" uk-icon="google-plus"></a>
                            <a href=" " class="uk-icon-button uk-youtube" uk-icon="youtube"></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>

</section>

@stop