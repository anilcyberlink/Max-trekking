@extends('themes.default.common.master')
@section('title',$data->trip_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)      
@section('thumbnail',$data->thumbnail)
@section('brief',$data->trip_excerpt)
@section('content')
<!-- HEADER START -->
<!--<section class="page-banner  uk-flex uk-flex-middle uk-position-relative  uk-background-cover uk-light" data-src="@if($data->banner){{ asset('uploads/banners/'.$data->banner)}}@else{{asset('themes-assets/images/default/default-banner.jpg')}}@endif" uk-img>-->
<!--   <div class=" uk-padding-large uk-padding-remove-vertical">-->
<!--      <div class="uk-padding">-->
<!--         <h2 class="page-title uk-margin-remove uk-text-white">Available Packages</h2>-->
<!--         <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">-->
<!--            <li><a href="{{url('/')}}">Home</a></li>-->
<!--            <li class="active"><span>{{ $data->trip_title }}</span></li>-->
<!--         </ul>-->
<!--      </div>-->
<!--   </div>-->
<!--   <div class="texture">-->
<!--      <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">-->
<!--   </div>-->
<!--</section>-->

<section class="page-banner">
    <div class="uk-inline uk-width-1-1">
        <img src="@if($data->banner){{ asset('uploads/banners/'.$data->banner)}}@else{{asset('themes-assets/images/default/default-banner.jpg')}}@endif"  alt="" style="height: 89vh; width: 100%; object-fit: cover;">
        <div class="uk-overlay uk-position-center-left">
            <div class="uk-padding">
                 <!--<h2 class="page-title uk-margin-remove uk-text-white">Available Packages</h2>-->
                 <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
                    <li><a href="{{url('/')}}" class="uk-text-white">Home</a></li>
                    <li class="active"><span class="uk-text-white">{{ $data->trip_title }}</span></li>
                 </ul>
            </div>
        </div>
    </div>  
    <div class="texture">
      <img src="{{asset('themes-assets/images/shape-8.png')}}" alt="">
   </div>
</section>
<!-- HEADER END -->
<!-- start section -->
<section class="uk-border-bottom  uk-sub-nav uk-bg-white  "  uk-margin  style="z-index: 222; position:relative;">
   <div class=" uk-container  ">
      <ul class="uk-visible@m uk-navbar uk-subnav-divider uk-text-center  uk-child-width-expand  uk-margin-remove-bottom">
         @if($data->trip_content)
            <li><a href="#overview" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-file-text"></span> Trip Overview</a></li>
         @endif
         @if($data->itineraries->count() > 0)
            <li><a href="#itinerary" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-calendar-o"></span> Itinerary</a></li>
         @endif
         @if($data->trip_map)
            <li><a href="#maps" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-map"></span> Maps</a></li>
         @endif
         @if($data->costincludes->count() > 0)
            <li><a href="#includes" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-tag"></span> Includes</a></li>
         @endif
         @if($data->costexcludes->count()>0)
            <li><a href="#excludes" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-bookmark"></span> Excludes</a></li>
         @endif
         @if ($schedules->count() > 0)
            <li><a href="#departure" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-calendar-o"></span> Fixed Dates</a></li>
        @endif
         @if($data->gears->count()>0)
            <li><a href="#photos" data-scroll-nav="0" uk-scroll="offset: 120"><span class="fa fa-photo"></span> Photos</a></li>
         @endif
      </ul>
      <button class="uk-navbar-toggle uk-hidden@m   " type="button" uk-toggle="target: #offcanvas-nav-primary"> </button>

      <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
         <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
               <li><a href="#overview" data-scroll-nav="0" uk-scroll>Trip Overview</a></li>
               <li><a href="#itinerary" data-scroll-nav="0" uk-scroll>Itinerary</a></li>
               <li><a href="#maps" data-scroll-nav="0" uk-scroll>Maps</a></li>
               <li><a href="#includes" data-scroll-nav="0" uk-scroll>Cost Includes</a></li>
               <li><a href="#excludes" data-scroll-nav="0" uk-scroll>Cost Excludes</a></li>
               <li><a href="#departure" data-scroll-nav="0" uk-scroll>Fixed Dates</a></li>
               <li><a href="#photos" data-scroll-nav="0" uk-scroll>Photos</a></li>
            </ul>
         </div>
      </div>
      <!--  -->
   </div>
</section>
<section class="uk-section">
   <div class=" uk-container uk-trips uk-relative" class="">
      <div uk-grid class="uk-margin-top uk-grid-large ">
         <div class="uk-width-expand@m ">
            <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-bottom">
               <h2>{{$data->trip_title}}</h2>
               @if($data->duration)
                  <div class=" uk-flex uk-flex-column uk-flex-center uk-flex-middle">
                     <i class="fa fa-calendar calendar-icon"></i>
                     <p class="uk-text-primary uk-margin-small calendar-detail">{{$data->duration}} DAYS</p>
                  </div>
               @endif
            </div>
            <!-- section start -->
            <div class="uk-card uk-card-default  uk-card-body  uk-margin-large-bottom  uk-padding uk-background-grey" id="overview">
               <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                  <ul class="uk-grid-small uk-trip-highlights uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid">
                     @if($data->walking_per_day)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="fa fa-map-marker  uk-text-primary"></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">
                                 <b>Start/End:</b>
                                 <p class="uk-margin-remove">{{$data->walking_per_day}}</p>
                              </div>
                           </div>
                        </li>
                     @endif
                     @if($data->max_altitude)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="uk-text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#1a2d3e" d="M256 32c12.5 0 24.1 6.4 30.8 17L503.4 394.4c5.6 8.9 8.6 19.2 8.6 29.7c0 30.9-25 55.9-55.9 55.9H55.9C25 480 0 455 0 424.1c0-10.5 3-20.8 8.6-29.7L225.2 49c6.6-10.6 18.3-17 30.8-17zm65 192L256 120.4 176.9 246.5l18.3 24.4c6.4 8.5 19.2 8.5 25.6 0l25.6-34.1c6-8.1 15.5-12.8 25.6-12.8h49z" />
                                 </svg></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">
                                 <b>Max-Elevation:</b>
                                 <p class="uk-margin-remove">{{$data->max_altitude}}</p>
                              </div>
                           </div>
                        </li>
                     @endif
                     @if($data->duration)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="fa fa-clock-o  uk-text-primary"></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">
                                 <b>Duration:</b>
                                 <p class="uk-margin-remove">{{$data->duration}} days</p>
                              </div>
                           </div>
                        </li>
                     @endif
                     @if($data->best_season)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="fa fa-calendar  uk-text-primary"></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">
                                 <b>Best Season:</b>
                                 <p class="uk-margin-remove">{{$data->best_season}}</p>
                              </div>
                           </div>
                        </li>
                     @endif
                     @if($data->group_size)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="fa fa-group  uk-text-primary"></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">
                                 <b>Group Size:</b>
                                 <p class="uk-margin-remove">{{$data->group_size}} people</p>
                              </div>
                           </div>
                        </li>
                     @endif
                     @if($data->get_trip_grade_data)
                        <li class="">
                           <div class="uk-margin uk-trip-div">
                              <span class="fa fa-level-up  uk-text-primary"></span>
                              <div class="uk-flex uk-flex-column uk-margin-remove">  
                                 <b>Trip Grade:</b>
                                 <p class="uk-margin-remove">{{$data->get_trip_grade_data->trip_grade}}<a href="" uk-tooltip="{{$data->get_trip_grade_data->grade_message}}" uk-icon="info" title="" aria-expanded="false" class="uk-icon"> </a></p>
                              </div>
                           </div>
                        </li>
                     @endif
                  </ul>
               </div>
            </div>
            <!-- section end -->
            <!-- section start -->
            @if($data->trip_content)
               <div class="uk-margin-large-bottom">
                  <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                     <h2>Overview</h2>
                     <p>{!!$data->trip_content!!}</p>
                  </div>
               </div>
            @endif
            <!-- section end -->
            <!-- section start -->
            @if($data->itineraries->count() > 0)
               <div class="uk-margin-large-bottom" id="itinerary" >
                  <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                     <h2>Itinerary</h2>
                     <ul uk-accordion="multiple: true" class="uk-itinerary ">
                        @foreach ($data->itineraries as $itinerary)
                           <li class="{{ ($loop->first)? 'uk-open':''}}" >
                              <a class="uk-accordion-title" href="#"><span class="days">Day {{ $itinerary->days }} </span>- {{ $itinerary->title }}</a>
                              <div class="uk-accordion-content">
                                 <p>{!! $itinerary->content !!}</p>
                              </div>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            @endif
            <!-- section end -->
            <!--new section added-->
            <!-- section start -->
            @if($data->trip_map)
                <div class="uk-margin-large-bottom" id="maps" >
                    <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                        <h2> Route Map </h2>
                        <div uk-lightbox=>
                            <a class="uk-inline" href="{{asset('uploads/original/'.$data->trip_map)}}" style="width: 100%;" >
                                <img src="{{asset('uploads/original/'.$data->trip_map)}}" class="map-image" width="1800" height="1200" alt="{{ $data->trip_title }}">
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            <!-- section end -->
            
            <!-- section start -->
            @if($data->costincludes->count() > 0)
               <div class="uk-margin-large-bottom " id="includes">
                  <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                     <h2> Cost Includes </h2>
                     <ul class="includes uk-margin-top">
                        @foreach($data->costincludes as $row)
                           <li>{{$row->title}}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            @endif
            <!-- section end -->
            <!-- section start -->
            @if($data->costexcludes->count() > 0)
               <div class="uk-margin-large-bottom" id="excludes">
                  <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                     <h2> Cost Excludes </h2>
                     <ul class="excludes  uk-margin-top">
                        @foreach($data->costexcludes as $row)
                           <li>{{$row->title}}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            @endif
            <!-- section end -->
            
            <!--new section added-->
            <!-- section start -->
            @if ($schedules->count() > 0)
                <div class="uk-margin-large-bottom" id="departure" >
                    <div uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                        <h2> Fixed Departure </h2>
                        <div class="uk-overflow-auto">
                           <table class="uk-table uk-table-hover uk-table-responsive uk-table-middle uk-table-divider">
                               <thead class="uk-depature-thead">
                                  <tr>
                                     <td class="uk-text-bold" width="25%">
                                         Date
                                     </td>
                                     <td class="uk-text-bold uk-text-center@m" width="20%">
                                        Status 
                                     </td>
                                     <td class="uk-text-bold uk-text-center@m" width="20%">
                                     Group Size 
                                     </td>
                                     <td class="uk-text-bold uk-text-center@m" width="55%">
                                         Action
                                     </td>
                                  </tr>
                               </thead>
                               <tbody>
                                    @foreach ($schedules as $item)
                                        <tr>
                                            <td>Start <span class="uk-hidden@m">Date</span>- {{ date('Y-m-d', strtotime($item->start_date)) }}  <br>  End <span class="uk-hidden@m">Date</span>- {{ date('Y-m-d', strtotime($item->end_date)) }}
                                            </td>
                                            <td class="uk-text-center@m">
                                                @if($item->availability == 'available')
                                                    <span class="uk-text-success">Booking Open</span>
                                                @else
                                                    <span class="uk-text-danger">Not Available</span>
                                                @endif
                                            </td>
                                            <td class="uk-text-center@m">
                                                <span class="uk-hidden@m"> Group Size  </span> {!! $item->remarks !!}
                                            </td>
                                            <td class="uk-text-center@m">
                                                @if($item->availability == 'available')
                                                <!--<a href="{{route('page.fixed.booking', $data->uri)}}" class="uk-button uk-button-primary">Book Now  </a>-->
                                                <form action="{{ route('page.fixed.booking', $data->uri) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="schedule_id" value="{{ $item->id }}">
                                                    <button type="submit" class="uk-button uk-button-primary">Book Now</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
            <!-- section end -->
            
            <!-- section start -->
            @if($data->gears->count()>0)
               <div id="photos">
                  <h2>Trip Photos</h2>
                  <div class=" uk-position-relative uk-visible-toggle uk-light uk-margin-top " tabindex="-1" uk-slideshow="min-height: 300; max-height: 450; ratio: 3:2; autoplay: true; animation: slide;">
                     <ul class="uk-slideshow-items uk-light" uk-lightbox="animation: slide">
                        @foreach($data->gears as $row)
                           <li class="uk-animation-fade">
                              <a class="uk-inline" href="{{asset('uploads/original/'.$row->thumbnail)}}">
                                 <img src="{{asset('uploads/original/'.$row->thumbnail)}}" alt="{{$row->title}}">
                              </a>
                           </li>
                        @endforeach
                     </ul>
                     <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-left;ratio: 3" uk-slideshow-item="previous"></a>
                     <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-icon="icon: chevron-right;ratio: 3" uk-slideshow-item="next"></a>
                  </div>
               </div>
            @endif

            <!-- section end -->
         </div>
         @include('themes.default.common.trip-action')
      </div>
   </div>
</section>
@stop