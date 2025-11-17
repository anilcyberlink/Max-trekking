<!DOCTYPE html>
<html>
<head>
   <title>@if($setting){{$setting->site_name}}@else Website @endif</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="google-site-verification" content="" />
   <meta name="description" content="{{$setting->meta_description}}" />
   <meta name="keywords" content="{{$setting->meta_key}}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="@yield('brief')" />
    @if (trim($__env->yieldContent('thumbnail')))
	<meta property="og:image" content="{{ asset('uploads/original/' ) }}/@yield('thumbnail')" />
	@else
	<meta property="og:image" content="{{asset('uploads/medium/'.$setting->logo)}}" />
	@endif
   <meta property="og:type" content="article" />
	<meta property="og:site_name" content="{{$setting->site_name}}" />


@hasSection('title')
    <meta property="twitter:title" content="@yield('title')" />
@else
    <meta property="twitter:title" content="{{$setting->site_name}}" />
@endif
	<meta property="twitter:description" content="@yield('brief')" />
   @if (trim($__env->yieldContent('thumbnail')))
	<meta property="twitter:image" content="{{ asset('uploads/original/' ) }}/@yield('thumbnail')" />
	@else
	<meta property="twitter:image" content="{{asset('uploads/medium/'.$setting->logo)}}" />
	@endif
   <meta property="twitter:url" content="{{url()->current()}}"/>

    <meta name="twitter:card" content="summary_large_image"/>
   <!--<link rel="shortcut icon" href="{{asset('themes-assets/images/fav/favicon-32x32.png')}}" type="image/x-icon">-->
   <link rel="stylesheet" href="{{asset('themes-assets/css/uikit.min.css')}}" />
   <link rel="stylesheet" href="{{asset('themes-assets/css/style.css')}}" />
   <link rel="stylesheet" href="{{asset('themes-assets/css/font-awesome.min.css')}}" />
   <script src="{{asset('themes-assets/js/uikit.min.js')}}"></script>
   <script src="{{asset('themes-assets/js/jquery-3.3.1.min.js')}}"></script>
   <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('themes-assets/images/favicon.png')}}">
   <!--<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ced0a5282010c0012835c6a&product=inline-share-buttons' async='async'></script>-->
   <!--<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=662893481c60d80019f8b3ed&product=sop' async='async'></script>-->
   
 
   <!-- Include Toastr CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <!-- Include Toastr JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GWXWP7QEB7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-GWXWP7QEB7');
</script>
<!-- WhatsApp Floating Chat Button -->
<a href="https://wa.me/+13474009772?text=Hello%20I%20would%20like%20to%20know%20more%20about%20your%20services!"
   class="whatsapp-float"
   target="_blank"
   title="Chat with us on WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="Chat on WhatsApp" />
</a>

<style>
.whatsapp-float {
    position: fixed;
    bottom: 52px;
    right: 20px;
    z-index: 1000;
}
.whatsapp-float img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}
.whatsapp-float:hover img {
    transform: scale(1.1);
}
.mobile-icon{
        position: fixed;
    bottom: 50%;
    z-index: 5;
        display: flex;
    flex-direction: column;
}
.f-icon{
    background: #1d5ad9;
    padding: 8px 8px 8px 14px;
    font-size: 19px;
    color: white;
    border-top-right-radius: 10px;
}
.i-icon{
    background: #a710f2;
    padding: 8px 8px 8px 14px;
    font-size: 19px;
    color: white;
    border-bottom-right-radius: 10px;
   
}
.t-icon{
    background: #1DA1F2;
    padding: 8px 8px 8px 14px;
    font-size: 19px;
    color: white;
    
}
.y-icon{
    background: #f81c48;
    padding: 8px 8px 8px 14px;
    font-size: 19px;
    color: white;
    border-bottom-right-radius: 10px;
}
</style>

<body>
   <header>
       <div class="mobile-icon uk-hidden@s">
           <a href="{{$setting->facebook_link}}" target="_blank" class="f-icon"><i class="fa fa-facebook uk-margin-small-right"></i></a>
           <!--<a href="{{$setting->twitter_link}}" target="_blank" class="t-icon"><i class="fa fa-twitter uk-margin-small-right"></i></a>-->
           <a href="{{$setting->instagram_link}}" target="_blank" class="i-icon"><i class="fa fa-instagram uk-margin-small-right"></i></a>
           <!--<a href="{{$setting->youtube_link}}" target="_blank" class="y-icon"><i class="fa fa-youtube uk-margin-small-right"></i></a>-->
       </div>
      
      <!-- end mobile top menu -->
      <div class="uk-main-header uk-padding uk-padding-remove  uk-navbar-container shadow-lg" uk-sticky="animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center" style="z-index:999;">
         <div class="uk-top-header   ">
         <div class="uk-container uk-container-center">
            <div class="uk-visible@s  uk-flex uk-flex-middle  " uk-grid>
               @if($setting)
                  <div class="uk-visible@s uk-width-4-5@s">
                     <ul class="uk-top-info uk-flex uk-flex-middle uk-text-left  ">
                        @if($setting->phone)
                           {{--<li class="phone"> <a href="tel:+977 9851042153"> <i class="fa fa-phone-square uk-margin-small-right"></i>
                                 {{$setting->phone}}</a>
                           </li>--}}
                           <li class="phone"> <a href="tel:{{$setting->phone}}"> <i class="fa fa-phone-square uk-margin-small-right"></i>
                                 {{$setting->phone}}</a>
                           </li>
                        @endif
                        @if($setting->email_primary)
                           <li class="email  "><a href="mailto:{{$setting->email_primary}}">
                                 <i class="fa fa-envelope uk-margin-small-right"></i>{{$setting->email_primary}}</a>
                           </li>
                        @endif
                     </ul>
                  </div>
               @endif
               <div class="uk-width-1-5@s">
                  <ul class="uk-top-info uk-text-right  uk-flex uk-flex-middle uk-flex-right">
                     <li><a href="{{$setting->facebook_link}}" target="_blank"><i class="fa fa-facebook uk-margin-small-right"></i></a></li>
                     <!--<li><a href="{{$setting->twitter_link}}" target="_blank"><i class="fa fa-twitter uk-margin-small-right"></i></a></li>-->
                     <li><a href="{{$setting->instagram_link}}" target="_blank"><i class="fa fa-instagram uk-margin-small-right"></i></a></li>
                     <!--<li><a href="{{$setting->youtube_link}}" target="_blank"><i class="fa fa-youtube uk-margin-small-right"></i></a></li>-->
                  </ul>
               </div>
               <div class="uk-clearfix">
               </div>
            </div>
         </div>
      </div>
         <div class="uk-container">
            <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar>
               @if($setting && ($setting->site_name || $setting->logo))
                  <div class="uk-navbar-left ">
                     <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                          <img src="{{asset('themes-assets/Hill and Mountain.jpg')}}" style="height:90px;" alt="">
                          <!--<h3 class="uk-margin-remove">{{$setting->site_name}}</h3>-->
                        <!--@if($setting->logo)-->
                        <!--   <img src="{{asset('uploads/medium/'.$setting->logo)}}" width="125%" alt="">-->
                        <!--@else-->
                        <!--   <h3 class="uk-margin-remove">{{$setting->site_name}}</h3>-->
                        <!--@endif-->
                     </a>
                  </div>
               @endif
               <div class="uk-navbar-right">
                  <!-- start desktop menu -->
                  <ul class="uk-navbar-nav uk-position-relative  uk-visible@m">
                     <!--<li> <a href="{{url('/')}}"> Home</a> </li>-->
                     @if($nav_about_us)
                        <li>
                           <a href="#">{{$nav_about_us->post_type}}
                              @if($about_us->count()>0)
                                 <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                              @endif
                           </a>
                           @if($about_us->count()>0)
                              <ul class="uk-menu-list bg-black " uk-dropdown="delay-hide: 400; uk-animation-slide-top-small; duration: 300;">
                                 @foreach($about_us as $item)
                                    <li><a href="{{ route('page.pagedetail', $item->uri) }}">{{$item->post_title}}</a> </li>
                                 @endforeach
                              </ul>
                           @endif
                        </li>
                     @endif
                     <!--mega menu -->
                     @if($expeditions->count()>0)
                        <li class="uk-active">
                           <a href="#">Expeditions
                              @if($expeditions->count()>0)
                                 <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                              @endif
                           </a>
                           <div class="uk-navbar-dropdown  uk-margin-remove  uk-border-top " uk-drop="delay-hide: 400; uk-animation-slide-top-small; duration: 300; boundary: .uk-navbar-container; boundary-align: true; pos: bottom-justify;" style="height:380px; border-bottom: 5px solid #1a2d3e;">
                              <div class="uk-container ">
                                 <ul class="uk-flex-center uk-travel-tabs" data-uk-tab="{connect:'.uk-switcher'}">
                                    @foreach($expeditions as $row)
                                       @if(trip_byDestinations($row->id)->count()>0)
                                          <li class="uk-active"><a href="#">{{$row->title}}</a></li>
                                       @endif
                                    @endforeach
                                 </ul>
                                 <div class="uk-switcher uk-width-expand@m uk-padding-menu ">
                                    @foreach($expeditions as $row)
                                       @if (trip_byDestinations($row->id)->count() > 0)
                                          <div>
                                             <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="sets: true; finite: true;">
                                             @if(trip_byDestinations($row->id)->count()>0)
                                                <ul class="uk-slider-items uk-child-width-1-3@m uk-grid" uk-grid>
                                                   @foreach (trip_byDestinations($row->id) as $_keyEx => $_rowEx)
                                                      <li>
                                                         <div>
                                                            <div class="uk-megamenu-sub-menu">
                                                               <img src="@if($_rowEx->thumbnail){{asset('uploads/original/'.$_rowEx->thumbnail)}}@else{{asset('themes-assets/images/default/default-thumbnail.png')}}@endif" class="image" alt="" >
                                                               <a href="{{ url('page/' . tripurl($_rowEx->uri)) }}">
                                                                  <div class="overlay">
                                                                     <h4 class="uk-margin-top uk-margin-remove-bottom text-white uk-position-bottom">
                                                                        {{$_rowEx->trip_title}}
                                                                     </h4>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             @endif
                                                <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                   <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                   <a href="{{ route('page.destinationlist', $row->uri) }}" class=" uk-mega-menu-button"> View All
                                                      <span class="uk-icon " uk-icon="icon:arrow-right; ratio: 1.5" uk-scrollspy="cls: uk-animation-slide-right; delay: 400; repeat: false;"></span>
                                                   </a>
                                                   <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                </div>
                                             </div>
                                          </div>
                                       @endif
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                        </li>
                     @endif
                     <!-- end mega menu -->
                     <!--mega menu -->
                     @if($regions->count()>0)
                        <li class="uk-active">
                           <a href="#">Trekkings
                              @if($regions->count()>0)
                                 <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                              @endif
                           </a>
                           @if($regions)
                              <div class="uk-navbar-dropdown  uk-margin-remove  uk-border-top " uk-drop="delay-hide: 400; uk-animation-slide-top-small; duration: 300; boundary: .uk-navbar-container; boundary-align: true; pos: bottom-justify;" style="height:380px; border-bottom: 5px solid #1a2d3e;">
                                 <div class="uk-container ">
                                    <ul class="uk-flex-center uk-travel-tabs" data-uk-tab="{connect:'.uk-switcher'}">
                                    @foreach($regions as $row)
                                       @if (tripbyregions($row->id)->count() > 0)
                                          <li class="uk-active"><a href="#{{$row->uri}}">{{$row->title}}</a></li>
                                       @endif
                                    @endforeach 
                                    </ul>
                                    <div class="uk-switcher uk-width-1-1@m uk-padding-menu ">
                                       @foreach ($regions as $row)
                                          @if (tripbyregions($row->id)->count() > 0)
                                             <div>
                                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="sets: true; finite: true;">
                                                   @if(tripbyregions($row->id)->count()>0)
                                                      <ul class="uk-slider-items uk-child-width-1-3@m uk-grid" uk-grid>
                                                         @foreach (tripbyregions($row->id) as $_keyEx => $_rowEx)
                                                            <li>
                                                               <div>
                                                                  <div class="uk-megamenu-sub-menu">
                                                                     <img src="@if($_rowEx->thumbnail){{asset('uploads/original/'.$_rowEx->thumbnail)}}@else{{asset('themes-assets/images/default/default-thumbnail.png')}}@endif" class="image" alt="" >
                                                                     <a href="{{ url('page/' . tripurl($_rowEx->uri)) }}">
                                                                        <div class="overlay">
                                                                           <h4 class="uk-margin-top uk-margin-remove-bottom text-white uk-position-bottom">
                                                                              {{ $_rowEx->trip_title }}
                                                                           </h4>
                                                                        </div>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                         @endforeach
                                                      </ul>
                                                   @endif
                                                   <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                      <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                      <a href="{{ route('page.regionlist', $row->uri) }}" class=" uk-mega-menu-button"> View All
                                                         <span class="uk-icon " uk-icon="icon:arrow-right; ratio: 1.5" uk-scrollspy="cls: uk-animation-slide-right; delay: 400; repeat: false;"></span>
                                                      </a>
                                                      <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          @endif
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           @endif
                        </li>
                     @endif
                     <!-- end mega menu -->
                     @if($pagetypes->count()>0)
                        <li>
                           <a href="{{url('info/'.$pagetypes[0]->uri)}}">Useful Info
                              <span class="" uk-icon="icon: chevron-down; ratio: .75;"></span>
                           </a>
                           <ul class="uk-menu-list bg-black " uk-dropdown="delay-hide: 400; uk-animation-slide-top-small; duration: 300;">
                              @foreach($pagetypes as $row)
                                 <!-- <li> <a href="single-page.php">Travel Insurance</a> </li> -->
                                 <li>
                                    <a href="{{url('info/'.$row->uri)}}">{{$row->page_type}}</a>
                                 </li>
                                 <!-- <li> <a href="faqs.php">FAQ</a> </li> -->
                                 <!-- <li> <a href="single-page.php">Privacy</a> </li> -->
                              @endforeach
                           </ul>
                        </li>
                     @endif
                     <!-- -->
                     @if($contact_us)
                        <li>
                           <a href="{{ route('page.posttype_detail', $contact_us->uri) }}">{{$contact_us->post_type}}</a>
                        </li>
                     @endif
                     <!-- -->
                     <li>
                        <a href="#modal-example"class="" uk-toggle uk-search-icon ></a>
                        <!-- This is the modal -->
                        <div id="modal-example" uk-modal>
                           <div class="uk-modal-dialog uk-modal-body uk-margin-top">
                              <button class="uk-modal-close-outside" type="button" uk-close></button>
                              <div class="uk-child-width-1-1" uk-grid>
                                 <form action="{{route('search-trip')}}" method="post" class="uk-search uk-search-default" style="width:100% important" >
                                    @csrf
                                    <span class="uk-search-icon-flip" uk-search-icon></span>
                                    <input class="uk-search-input" type="search" name="search" placeholder="Search" aria-label="Search" required>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <!-- end desktop menu -->
                  <!-- mobile menu button -->
                  <ul class="uk-navbar-nav">
                     <li>
                        <a class="uk-navbar-toggle uk-hidden@m  uk-light" uk-toggle="target: #offcanvas-reveal">
                           <span class="uk-margin-small-right">
                              <div class="uk-flex uk-flex-middle">
                                 <div class="uk-margin-small-right"> </div>

                              </div>
                           </span>
                        </a>
                     </li>
                  </ul>
                  <!-- mobile menu button -->
               </div>
            </nav>
         </div>
      </div>
   </header>
   <!-- /header -->
   <!-- start mobile menu -->
   <!--<div class="sharethis-sticky-share-buttons"></div>-->
   <div id="offcanvas-reveal" class="uk-modal-full" uk-modal>
      <button class="uk-offcanvas-close" type="button" uk-close></button>

      <div class="uk-modal-dialog uk-flex uk-flex-center uk-padding" uk-height-viewport>
         <div class="uk-width-2xlarge">
            @if($setting && $setting->site_name)
               <div class="uk-flex uk-flex-center uk-flex-middle uk-margin-bottom">
                  <div>
                     <a class="uk-navbar-item uk-logo uk-padding-remove " href="{{url('/')}}">
                        <h3 class="uk-margin-remove">{{$setting->site_name}}</h3>
                     </a>
                  </div>
               </div>
            @endif
            <nav class="uk-margin-top uk-margin-large-bottom">
               <ul class="uk-navsidebar  uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical" uk-nav="multiple: false">
                  <li><a href="{{url('/')}}" style="color:black !important;">Home</a></li>
                  <!-- -->
                  @if($nav_about_us)
                     <li class="uk-parent">
                        <a href="javascript:void(0)">{{$nav_about_us->post_type}}</a>
                        @if($about_us)
                           <ul class="uknavsub">
                              @foreach($about_us as $item)
                                 <li> <a href="{{ route('page.pagedetail', $item->uri) }}">{{$item->post_title}}</a> </li>
                              @endforeach
                           </ul>
                        @endif
                     </li>
                  @endif
                  <!-- -->
                  <!-- -->
                  @if($expeditions->count()>0)
                     <li class="uk-parent">
                        <a href="#" class="uk-active">Expeditions</a>
                        <ul class="uknavsub  " uk-nav="multiple: false">
                           @foreach($expeditions as $row)
                              @if(trip_byDestinations($row->id)->count()>0)
                                 <li><a href="{{ route('page.destinationlist', $row->uri) }}">{{$row->title}}</a></li>
                              @endif
                           @endforeach
                        </ul>
                     </li>
                  @endif
                  <!-- -->
                  <!-- -->
                  @if($regions->count()>0)
                     <li class="uk-parent">
                        <a href="#">Trekking</a>
                        <ul class="uknavsub" uk-nav="multiple: false">
                           @foreach($regions as $row)
                              <li> <a href="{{ route('page.regionlist', $row->uri) }}">{{$row->title}}</a> </li>
                           @endforeach
                        </ul>
                     </li>
                  @endif
                  <!-- -->
                  <!-- -->
                  @if($pagetypes->count()>0)
                     <li class="uk-parent">
                        <a href="#">Useful Info </a>
                        <ul class="uknavsub" uk-nav="multiple: false">
                           @foreach($pagetypes as $row)
                              <li> <a href="{{url('info/'.$row->uri)}}">{{$row->page_type}}</a></li>
                             
                           @endforeach
                        </ul>
                     </li>
                  @endif
                  <!-- -->
                  <!-- -->
                  @if($contact_us)
                     <li>
                        <a href="{{ route('page.posttype_detail', $contact_us->uri) }}">{{$contact_us->post_type}}</a>
                     </li>
                  @endif
               </ul>
            </nav>
            <hr>
            <div class="uk-child-width-auto uk-margin-large-top  uk-flex-center" uk-grid>
               <div>
                  <a href="@if($setting && $setting->facebook_link){{$setting->facebook_link}}@else # @endif" class="uk-link uk-icon-button bg-primary text-black" rel="noreferrer" uk-icon="icon: facebook;"></a>
               </div>
            
               <!--<div>-->
               <!--   <a href="@if($setting && $setting->youtube_link){{$setting->youtube_link}}@else # @endif" class="uk-link uk-icon-button bg-primary text-black" rel="noreferrer" uk-icon="icon: youtube;"></a>-->
               <!--</div>-->
               <!--<div>-->
               <!--   <a href="@if($setting && $setting->twitter_link){{$setting->twitter_link}}@else # @endif" class="uk-link uk-icon-button bg-primary text-black" rel="noreferrer" uk-icon="icon: twitter;"></a>-->
               <!--</div>-->
               <div>
                  <a href="@if($setting && $setting->instagram_link){{$setting->instagram_link}}@else # @endif" class="uk-link uk-icon-button bg-primary text-black" rel="noreferrer" uk-icon="icon: instagram;"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end mobile menu -->
   <!-- start page_content-->
   <div id="page_content">