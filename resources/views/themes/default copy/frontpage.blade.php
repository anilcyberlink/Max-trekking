@extends('themes.default.common.master')
@section('content')
<!-- slider -->
@if($banner->count()>0)
   <div class="banner">
      <div class=" uk-position-relative uk-visible-toggle uk-light  " tabindex="-1" uk-slideshow="min-height: 350; max-height: 550; ratio: 3:2; autoplay: false; animation: pull;" >
         <ul class="uk-slideshow-items uk-light" >
            @if($banner != null)
               @foreach ($banner as $row)
                  <li class="uk-animation-fade">
                     <img src="@if ($row->banner) {{ asset('uploads/banners/' . $row->banner) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" alt="" uk-cover>
                     @if($row->trip_title)
                        <div class=" uk-text-center uk-light  ">
                           <div class="banner-overly">
                              <h1 class="uk-text-white uk-text-bold uk-text-banner uk-margin-remove-top uk-margin-remove-bottom   uk-text-shadow" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 600; repeat: false;">{{ $row->trip_title }}</h1>
                              @if($row->trip_highlight)
                                <p class="uk-margin-remove-top " uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 800; repeat: false;">{{$row->trip_highlight}}</p>
                            @endif
                              <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-button  uk-button-bordered-white uk-margin-bottom uk-margin-top" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 1200; repeat: false;">Explore Packages </a>
                           </div>
                        </div>
                     @endif
                  </li>
               @endforeach
            @endif
         </ul>
         <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-left;ratio: 3" uk-slideshow-item="previous"></a>
         <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-right;ratio: 3" uk-slideshow-item="next"></a>
      </div>
      <div class="texture">
         <img src="{{ asset('themes-assets/images/shape-8.png')}}" alt="">
      </div>
   </div>
@endif
<!-- slider -->
<!-- about us -->
@if($about_data_child)
<section class="uk-section-padding uk-padding-remove-bottom  uk-about uk-margin-large-top@m ">
   <div class=" uk-container ">
      <div class="uk-grid-large uk-child-width-1-2@l uk-child-width-1-2@m  uk-child-width-1-1@s uk-text-justify" uk-grid>
         <div uk-scrollspy="cls: uk-animation-slide-top-small;delay: 200; repeat: false;">
            <div class="uk-main-title-home uk-margin-bottom  " uk-scrollspy="cls: uk-animation-slide-top-small;  delay: 200; repeat: false">
               <h2 class="uk-text-bold   uk-margin-remove-bottom uk-padding-remove-bottom"> {{$about_data_child->post_title}}</h2>
               <p class="uk-text-bold">{!!$about_data_child->post_excerpt!!}</p>
               <p>{!!$about_data_child->post_content!!}</p>
               <a href="{{ route('page.pagedetail', $about_me->uri) }}" class="uk-button uk-button-primary">Know More  </a>
            </div>
         </div>
         @if($about_data_child_images->count()>0)
            <div uk-scrollspy="cls: uk-animation-slide-top-small; delay: 200; repeat: false;" class=" uk-flex uk-flex-center uk-flex-middle   uk-about-img-section">
               @if($about_data_child_images->count()>1)
                  <div class="uk-about-img uk-margin-bottom" style="margin-right:5px; width:50%;"><img src="@if($about_data_child_images[1]->file_name) {{ asset('uploads/medium/' . $about_data_child_images[1]->file_name) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" alt=""></div>
               @endif
               <div class=" uk-about-img uk-padding-remove-bottom " style="margin-left:5px; width:50%; margin-top:-69px;"><img src="@if($about_data_child_images[0]->file_name) {{ asset('uploads/medium/' . $about_data_child_images[0]->file_name) }}@else{{ asset('themes-assets/images/default/default-banner.jpg') }} @endif" alt="" ></div>
            </div>
         @endif
      </div>
   </div>
</section>
@endif
<!-- end about us -->
@if($expeditions->count()>0)
   <section class="uk-section-padding  uk-padding-remove-top">
      <div class=" uk-container">
         <div class="uk-main-title-home  uk-text-center uk-margin-medium-bottom" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
            <h2 class="uk-text-bold uk-margin-remove-bottom uk-padding-remove-bottom"> Find Our Expedition</h2>
            <img src="{{asset('themes-assets/images/title-icon.png')}}" alt="">
         </div>
         <div class="uk-position-relative uk-visible-toggle  " tabindex="-1" uk-slider="sets: true; finite: true;">
            <ul class="uk-slider-items uk-child-width-1-2@s  uk-child-width-1-2@m uk-text-center" uk-grid uk-scrollspy="cls: uk-animation-slide-left-small; target:h1, p, img;  delay: 100; repeat: false;">
            @foreach($expeditions as $row)
               @if(trip_byDestinations($row->id)->count()>0)
                  <li>
                     <a class="uk-list-shine uk-corner-hover uk-cover-container  uk-display-block" href="{{ route('page.destinationlist', $row->uri) }}">
                        <div class="uk-media-520">
                           <img class="uk-image" alt="" uk-img src="@if($row->thumbnail) {{ asset('uploads/original/' . $row->thumbnail) }} @else{{ asset('themes-assets/images/default/default-thumbnail.png') }} @endif" style="width: 100%;height: 100%; object-fit: cover;">
                        </div>
                        <div class="uk-overlay-primary  uk-position-cover"></div>
                        <div class="uk-position-center">
                           <div class="uk-overlay ">
                              <h1 class="main-title-font expedition-font uk-margin-remove text-white"> {{$row->title}}</h1>
                              <p class="uk-margin-remove text-white">{{$row->content}}</p>
                           </div>
                        </div>
                     </a>
                  </li>
               @endif
            @endforeach
            </ul>
            <a class="uk-nav-slider-btn  uk-position-center-left uk-margin-small-left uk-hidden" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
            <a class="uk-nav-slider-btn  uk-position-center-right uk-margin-small-right uk-hidden" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
            <!-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> -->
         </div>
      </div>
   </section>
@endif
<!-- Middle banner -->
@if($post_contact_us)
   <div class="middle-banner">
      <div class="top-texture" >
         <img src="{{ asset('themes-assets/images/shape-9.png')}}" alt="">
      </div>
      <section class="uk-section-padding uk-trip-price uk-middle-banner uk-text-center">
         <div class="uk-container" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 200; repeat: false;">
            <h2 class="uk-text-bold uk-margin-remove-bottom uk-margin-top uk-padding-remove-bottom uk-text-white">{{$post_contact_us->post_title}}</h2>
            <img src="{{asset('themes-assets/images/title-icon.png')}}" alt="">
            <p class=" text-white">{!!$post_contact_us->post_excerpt!!}</p>
            <a href="{{ route('page.posttype_detail', $contact_us->uri) }}" class="uk-button  uk-button-bordered-white uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 200; repeat: false;">Contact Us </a>
         </div>
      </section>
      <div class="texture">
         <img src="{{ asset('themes-assets/images/shape-8.png')}}" alt="">
      </div>
   </div>
@endif
<!-- end Middle banner -->
<!-- trip package -->
@if($popular_trip)
   @if ($popular_trip->trips->count() > 0)
      <section class="uk-section-padding-small  uk-margin-top">
         <div class=" uk-container">
            <div class="uk-grid   uk-child-width-1-1@s  uk-margin-medium-bottom" uk-grid>
                  <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                     <div class="uk-main-title-home  " uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                        <h2 class="uk-text-bold    uk-margin-remove-bottom uk-padding-remove-bottom"> Find Our Popular Trips</h2>
                     </div>  
                  </div>    
                  <div  class="uk-width-2-3@m uk-margin-small-top@s uk-text-right@m"  uk-scrollspy="cls: uk-animation-slide-left-small;   delay: 100; repeat: false;" >
                     <a href="{{ route('popular-trips') }}" class="uk-button uk-button-trip ">View all Trip</a>
                  </div>
            </div>
            <div class="uk-position-relative uk-visible-toggle  " tabindex="-1" uk-slider="sets: true autoplay: true autoplay-interval: 100 ">
               <ul class="uk-slider-items uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid " uk-height-match=".uk-text-wrp">
                  @foreach ($popular_trip->trips->take(10) as $item)
                     <li>
                        <div class="uk-package-list">
                           <div class=" uk-card" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                              <a href="{{ url('page/' . tripurl($item->uri)) }}">
                                 <div class="uk-card-media-top uk-image-200 uk-block">
                                       <img src="@if ($item->thumbnail) {{ asset('uploads/original/' . $item->thumbnail) }}@else{{ asset('themes-assets/images/default/default-thumbnail.png') }} @endif" alt="{{ $item->trip_title }}">
                                       <!--<div class="ribbon"> <span>USD</span>1,090</div>-->
                                 </div>
                              </a>
                              <div class="">
                                 <div class="uk-text-wrp">
                                     <a href="{{ url('page/' . tripurl($item->uri)) }}">
                                    <h3 class="uk-title">{{ $item->trip_title }}</h3>
                                    </a>
                                    <div class="uk-grid uk-child-width-1-2">
                                       @if($item->duration)
                                          <p class="uk-meta "><span><i class="fa fa-clock-o uk-text-primary "></i></span>{{ $item->duration }} days</p>
                                       @endif
                                       @if($item->group_size)
                                          <p class="uk-meta "><span><i class="fa fa-group uk-text-primary "></i></span>{{ $item->group_size }} people</p>
                                       @endif
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  @endforeach
               </ul>
               <a class="uk-slider-btn uk-position-center-left uk-position-small uk-hidden@l" href="#" uk-icon="icon: chevron-left;ratio: 3" uk-slider-item="previous" style="margin-top:-24px;"></a>
               <a class="uk-slider-btn uk-position-center-right uk-position-small uk-hidden@l" href="#" uk-icon="icon: chevron-right;ratio: 3" uk-slider-item="next" style="margin-top:-24px;"></a>
               <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
         </div>
      </section>
   @endif
@endif
<!-- end pacakges   -->
<!-- review -->
@if(!($trip_review)->isEmpty())
   <section class="uk-section-padding-medium pattern-mountain  uk-border-top">
      <div class=" uk-container">
         <div class="uk-main-title-home uk-margin-bottom uk-text-center " uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
            <h2 class="uk-text-bold">Clients Review </h2>
            <img src="{{asset('themes-assets/images/title-icon.png')}}" alt="">
         </div>
         <div class="uk-text-left" uk-grid>
            <div class="uk-width-expand@m" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
               <div class="uk-position-relative uk-visible-toggle uk-testimonials" tabindex="-1" uk-slider="autoplay: true autoplay-interval: 100">
                  <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                     @foreach($trip_review as $row)
                        <li>
                           <div class="uk-testimonials-list">
                              <img class="uk-image-user" src="@if($row->image){{ asset('uploads/reviews/' . $row->image) }}@else{{asset('themes-assets/images/default/profile.png')}}@endif" alt="user_profile">
                              <h4 class="uk-margin-top">{{$row->name}} 
                                 <span>{{$row->sub_title}}</span>
                              </h4>
                              <p> {!!$row->brief!!}</p>
                           </div>
                        </li>
                     @endforeach
                  </ul>
                  <div class="uk-clearfix"></div>
                  <a class=" uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                  <a class=" uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-next uk-slider-item="next"></a>
                  <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                  <div class="uk-clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endif
<!-- review -->
<!-- start Associate and Certified  -->
@if($partners->count()>0)
   <section class="uk-section-padding  ">
      <div class=" uk-container">
         <div class="uk-main-title-home uk-margin-bottom uk-text-center" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
            <h2 class="uk-text-bold   uk-margin-remove-bottom uk-padding-remove-bottom">We are Associate and Certified</h2>
            <img src="{{asset('themes-assets/images/title-icon.png')}}" alt="">
         </div>
         <div class="uk-clearfix uk-margin"> </div>
         <div class="uk-position-relative uk-visible-toggle  " tabindex="-1" uk-slider="autoplay: true autoplay-interval: 1000">
            <ul class="uk-grid-match uk-slider-items uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid" uk-scrollspy="cls: uk-animation-fade; target:.associate-item;  delay: 500;">
               @foreach($partners as $row)
                  <li>
                     <div class="associate-item">
                        <div  uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                           <div class="associate-img"><img src="{{asset('uploads/banners/' . $row->picture)}}" alt="npl"></div>
                           <div class="associate-text">
                              <h4>{{$row->title}}</h4>
                           </div>
                        </div>
                     </div>
                  </li>
               @endforeach
            </ul>
            <!-- <a class="uk-slider-btn uk-position-center-left uk-position-small uk-hidden-hover" href="#"  uk-icon="icon: chevron-left;ratio: 3"     uk-slider-item="previous" ></a>
               <a class="uk-slider-btn uk-position-center-right uk-position-small uk-hidden-hover" href="#"  uk-icon="icon: chevron-right;ratio: 3"    uk-slider-item="next"></a> -->
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
         </div>
      </div>
   </section>
@endif
<!-- end Associate and Certified   -->
<!-- start Best Selling Holidays  -->
<!-- <section class="uk-section-padding  pattern3 uk-light">
   <div class=" uk-container">
       <div class="uk-main-title-home uk-margin-bottom" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
           <h2 class="uk-text-bold uk-text-white">Best Selling Holidays</h2>
           <span class="uk-background-white"></span>
       </div>
       <div class="uk-position-relative uk-visible-toggle  uk-margin-top" tabindex="-1" uk-slider uk-scrollspy="cls: uk-animation-fade; target:.uk-activities-list;  delay: 500; repeat: false">
           <ul class="uk-slider-items uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
               <li>
                 
                   <div>
                       <div class="uk-package-list" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                           <a href="">
                               <div class="uk-card-media-top uk-image-300 uk-block">
                                   <div class="uk-tour-price"> <span>USD</span> 1,090</div>
                                   <img src="images/t3.jpg" alt="">
                                   <span class="ribbon">most popular</span>
                                   <div class="uk-text-wrp">
                                       <h3 class="uk-title uk-text-white">Manaslu Circuit</h3>
                                       <p class="uk-meta uk-text-white">Duration: <strong>14</strong> days</p>
                                   </div>
                               </div>
                           </a>
                       </div>
                   
               </li>
               <li>
                  
                   <div>
                       <div class="uk-package-list" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                           <a href="">
                               <div class="uk-card-media-top uk-image-300 uk-block">
                                   <div class="uk-tour-price"> <span>USD</span> 1,090</div>
                                   <img src="images/t1.jpg" alt="">
                                   <div class="uk-text-wrp">
                                       <h3 class="uk-title uk-text-white">Annapurna Base Camp</h3>
                                       <p class="uk-meta uk-text-white">Duration: <strong>14</strong> days</p>
                                   </div>
                               </div>
                           </a>
                       </div>
                   
               </li>
               <li>
                 
                   <div>
                       <div class="uk-package-list" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                           <a href="">
                               <div class="uk-card-media-top uk-image-300 uk-block">
                                   <div class="uk-tour-price"> <span>USD</span> 1,090</div>
                                   <img src="images/t2.jpg" alt="">
                                   <span class="ribbon">most popular</span>
                                   <div class="uk-text-wrp">
                                       <h3 class="uk-title uk-text-white">Everest Base Camp Trek</h3>
                                       <p class="uk-meta uk-text-white">Duration: <strong>14</strong> days</p>
                                   </div>
                               </div>
                           </a>
                       </div>
                     
               </li>
           </ul>
           <a class="uk-slider-btn uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-left;ratio: 3" uk-slider-item="previous"></a>
           <a class="uk-slider-btn uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-right;ratio: 3" uk-slider-item="next"></a>
           <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin  "></ul>
   
           <div class="uk-margin-top uk-text-center">
               <a href="trekking.php" class="uk-button uk-button-bordered-white">View All</a>
           </div>
       </div>
   </div>
   </section> -->
<!-- end Best Selling Holidays   -->
@endsection