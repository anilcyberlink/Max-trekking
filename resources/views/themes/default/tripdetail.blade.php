@extends('themes.default.common.master')
@section('title', $data->trip_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->thumbnail)
@section('brief', $data->trip_excerpt)
@section('content')

<!-- banner section start -->
<section>
   <div>
      <img src="{{$data->banner ? asset('uploads/banners/' . $data->banner) : asset('themes-assets/img/mountain1.jpg')}}"
         alt="{{ $data->trip_title }}" class="uk-banner-image">
      <div class="uk-overlay-default uk-position-cover uk-banner-overlay"></div>
      <div class="uk-overlay uk-position-center uk-light ">
         <div class="uk-text-center uk-margin-top">
            <h1 class="uk-text-uppercase text-white fw-600 uk-margin-small-top uk-margin-remove-bottom ls-4">
               {{ $data->trip_title }}</h1>
            <div class="divider">
               <span class="line"></span>
               <span class="icon"><i class="fa-solid fa-plane"></i></span>
               <span class="line"></span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- banner section end -->
<div class="uk-position-relative detail-nav bg-primary">
   <div class="  uk-sticky"
      uk-sticky="offset: 95;  animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center "
      style="z-index:960;">
      <div class="border uk-light">
         <div class="uk-small-details-nav">
            <div class="uk-container uk-position-relative uk-flex bg-primary uk-box-shadow-large border-rounded">
               <ul
                  class="uk-width-1-1 uk-navbar-single uk-flex uk-flex-between uk-flex-middle uk-margin-remove-bottom sidenav">
                  <li>
                     <a href="#overview">Overview </a>
                  </li>
                  <li>
                     <a href="#maps">Route </a>
                  </li>
                  <li>
                     <a href="#photo">Gallery </a>
                  </li>
                  <li>
                     <a href="#date">Dates</a>
                  </li>
                  <li>
                     <a href="#itinerary">Itinerary </a>
                  </li>
                  <li>
                     <a href="#include">Includes / Excludes</a>
                  </li>
                  <li>
                     <a href="#info">Useful Info</a>
                  </li>
                  <li>
                     <a href="#review">Review </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- overview section start -->
<section class="uk-section" id="overview">
   <div class="uk-container uk-container-large">
      <div class=" uk-grid-small uk-grid">
         <div class="uk-width-2-3@m uk-width-3-4@l">

            <div>
               <div class="uk-grid uk-flex uk-flex-middle ">
                  <div class="uk-width-3-4 uk-margin-top">
                     <div class="uk-flex uk-flex-left">
                        <h2 class="text-primary fw-600 hb-bottom">{{ $data->sub_title }}</h2>
                     </div>
                  </div>
                  <div class="uk-width-1-4 uk-text-right uk-margin-top">
                     <div>
                        <i class="fa-solid fa-calendar-days text-primary" style="font-size:32px;"></i>
                        <h4 class="text-primary fw-600 uk-margin-remove f-18">{{ $data->duration }} Days</h4>
                     </div>
                  </div>
               </div>
            </div>
            <!-- facilities start -->
            <div class="border-rounded  uk-margin-bottom" style="background: #c7e6ff69; padding:25px 12px;">
               <div class=" uk-grid-small" uk-grid>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/map.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Destination</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->duration }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/speedometer.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Difficulty </b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->get_trip_grade_data->trip_grade }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/mountain.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove" style="line-break: anywhere;"><b>Max Elevation</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->max_altitude }}m</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/group.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Group Size</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->group_size }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/starting-point.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Starts at</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->duration }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/end-line.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Ends at</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->duration }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/accommodation.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove" style="line-break: anywhere;"><b>Accomendation</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->accommodation }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/accommodation.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Best Season</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->best_season }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/safari.png') }}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Activity</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->walking_per_day }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/transportation.png') }}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Transportation</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->route }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-4@l">
                     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                        uk-grid="">
                        <div class="uk-width-auto"><img src="{{ asset('themes-assets/img/icon/iftar.png')}}" class="uk-feature-icon" alt="">
                        </div>
                        <div>
                           <div>
                              <p class="uk-margin-remove"><b>Meals</b></p>
                              <p class="text-secondary uk-margin-remove">{{ $data->meal }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- facilities end -->
            <!-- overview start -->
            <div>
               <span class="section-tag uk-text-uppercase">Overview <i
                     class="fa-solid fa-plane uk-margin-small-left"></i></span>
               <p class="uk-text-justify">
                  Dreaming of conquering the world's highest peak? The <b class="text-secondary">Everest expedition
                     awaits,</b> a chance to stand on the roof of the world. <br><br>
                  At 8,848 meters (29,029 ft), it's the crown jewel of the Himalayas, the highest point on Earth. But
                  reaching the summit is no walk in the park. The Everest expedition is one of the most challenging
                  adventures on the planet, pushing you to your physical and mental limits. Located in the Khumbu region
                  on the border with Tibet, Everest offers a once-in-a-lifetime opportunity to experience breathtaking
                  beauty and unparalleled challenge. <br> <br>
                  <b class="text-secondary">Don't settle for anything less.</b> Everest is an experience of a lifetime,
                  and the right expedition company can make all the difference. <br><br>
                  During the Everest Expeditions, we provide you with a full package. Our Everest climbing guides are
                  highly qualified and skilled, regularly reviewed and re-trained, and recognized for their training and
                  experience throughout the profession. Only the most experienced guides and staff are deputed in this
                  expedition as we place a great deal of emphasis on safety and accident prevention for both clients and
                  guides on our expeditions. Our safety protocols reduce the risk as much as possible. Additionally, we
                  would like to emphasize that our guides and staff are all employed according to ethical standards.
                  Everest Expedition with Max is a combination of the hands and collaborative efforts of experienced
                  Sherpas and the right equipment management, high altitude gear, and properly managed evacuation plans
                  during an emergency.
               </p>
            </div>
            <!-- overview end -->
            <!-- best time start -->
            <div>
               <span class="section-tag uk-text-uppercase">Best time for expedition <i
                     class="fa-solid fa-plane uk-margin-small-left"></i></span>
               <p>
                  Spring (April-May) offers the most favorable conditions for your expedition. Here's why:
               </p>
               <ul class="uk-best-ul">
                  <li><b>Calmer winds:</b> Reduced wind speeds make climbing safer and more manageable.</li>
                  <li><b>Sunny days:</b> Enjoy clear skies and breathtaking Himalayan vistas throughout your trek</li>
                  <li><b>Milder temperatures:</b> Spring offers a reprieve from the harsh winter cold, making the
                     journey more .</li>
                  <li><b>Vivid landscapes:</b> Lush green forests, cascading rivers, and vibrant birdlife create a
                     stunning.</li>
                  <li><b>Uninterrupted mountain views:</b> Spring's clear skies ensure you won't miss a single moment of
                     the majestic Himalayas.</li>
               </ul>
            </div>
            <!-- best time end -->


         </div>
         <div class="uk-width-1-3@m uk-width-1-4@l">
            <div uk-sticky="offset: 150; end: #my-id; " style="z-index: 100;">
               <div class="uk-card uk-trip-price uk-padding">
                  <div class="uk-flex uk-flex uk-flex-center">
                     <h4 class="text-white fw-600">PRICE: $1451</h4>
                  </div>
                  <div class="uk-trip-button uk-flex uk-flex-column">
                     <a href="#enquiry-form" uk-toggle type="button"
                        class="uk-small-btn uk-small-btn-secondary uk-flex uk-flex-between uk-flex-middle">Enquiry Now<i
                           class="fa fa-long-arrow-right"></i></a>
                     <a href="book.php"
                        class="uk-small-btn uk-small-btn-white uk-flex uk-flex-between uk-flex-middle uk-margin-top">Book
                        this Trip <i class="fa fa-long-arrow-right"></i></a>

                  </div>
                  <hr>
                  <div class="uk-flex uk-flex-middle ">
                     <span class="text-white f-18 uk-margin-remove">Need Help? </span>

                  </div>
                  <div class="uk-margin-top ">
                     <h5 class="uk-margin-small-bottom text-white"><span
                           class="fa fa-phone uk-margin-small-right text-secondary "></span>+1 (347) 400-9772</h5>
                     <h5 class="uk-margin-remove  "><a href="mailto:info@maxtrek.com.np" class="text-white"><span
                              class="fa fa-envelope-o uk-margin-small-right text-secondary"></span>info@maxtrek.com.np
                     </h5></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="my-id"></div>
</section>
<!-- overview section end -->

<!-- route section start -->
<section class="uk-section bg-light-blue" id="maps">
   <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
         <div class="uk-width-1-2@m">
            <span class="section-tag uk-text-uppercase">expedition route <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-primary fw-600 hb-bottom uk-margin-small-top">Route You Will See On The Trip</h2>
            <p class="uk-text-justify">
               The journey begins at Everest Base Camp (18,000 ft.), a bustling hub at the foot of the Khumbu Glacier.
               Here, climbers gather and they prepare for the challenging expedition .Beyond Base Camp, the terrain
               becomes increasingly treacherous. Seracs (towers of ice), crevasses, and house-sized chunks of ice demand
               careful navigation. <br><br>
               <b class="text-secondary">Camp 1 (20,000 ft.)</b> offers a brief respite with its flat area and
               sun-warmed ambiance, but the nights are filled with the unsettling sound of groaning crevasses beneath
               the tents.<br>
               <b class="text-secondary">Camp 2 (21,000 ft.)</b> offers a brief respite with its flat area and
               sun-warmed ambiance, but the nights are filled with the unsettling sound of groaning crevasses beneath
               the tents.<br>
            </p>
         </div>
         <div class="uk-width-1-2@m">
            <div uk-lightbox>
               <a class="uk-inline" href="{{asset('themes-assets/img/map.jpg')}}" data-caption="Route Map">
                  <img src="{{asset('themes-assets/img/map.jpg')}}" width="1800" height="1200" alt="">
               </a>
            </div>
         </div>
      </div>

   </div>
</section>
<!-- route section end -->

<!-- gallery section start -->
<section class="uk-section" id="photo">
   <div class="uk-container">
      <div class="uk-flex uk-flex-column uk-flex-enter ">
         <div class="uk-text-center">
            <span class="section-tag uk-text-uppercase">Gallery <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-primary fw-600  uk-margin-small-top">Photos Of The Trip</h2>
         </div>
      </div>
      <div>
         <div class="uk-gallery ">
            <ul class="uk-grid-collapse uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide;">
               <li class="uk-width-1-1">
                  <a href="{{asset('themes-assets/img/mountain1.jpg')}}" data-caption="Everest Base Camp Trek">
                     <div class="uk-media-400 uk-list-shine">
                        <img src="{{asset('themes-assets/img/mountain1.jpg')}}" uk-img>
                     </div>
                  </a>
               </li>
               <li class=" uk-width-1-3@m uk-width-1-2">
                  <a href="{{asset('themes-assets/img/about.jpeg')}}" data-caption="Everest Base Camp Trek">
                     <div class="uk-media-220 uk-list-shine">
                        <img src="{{asset('themes-assets/img/about.jpeg')}}" uk-img>
                     </div>
                  </a>
               </li>
               <li class=" uk-width-1-3@m uk-width-1-2">
                  <a href="{{asset('themes-assets/img/about.jpeg')}}" data-caption="Everest Base Camp Trek">
                     <div class="uk-media-220 uk-list-shine">
                        <img src="{{asset('themes-assets/img/about.jpeg')}}" uk-img>
                     </div>
                  </a>
               </li>

               <li class=" uk-width-1-3@m uk-width-1-1">
                  <a href="{{asset('themes-assets/img/about.jpeg')}}" data-caption="Everest Base Camp Trek">
                     <div class="uk-media-220 uk-more-images  uk-list-shine">
                        <img src="{{asset('themes-assets/img/about.jpeg')}}" uk-img>
                        <span class="uk-h1 uk-position-center uk-light uk-margin-remove text-white "
                           style="z-index: 1;">+3</span>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                     </div>
                  </a>
               </li>
               <!-- more images -->
               <li>
                  <a href="{{asset('themes-assets/images/trip/07.jpg')}}" data-caption="Everest Base Camp Trek"></a>
               </li>
               <li>
                  <a href="{{asset('themes-assets/images/trip/08.jpg')}}" data-caption="Everest Base Camp Trek"></a>
               </li>
               <li>
                  <a href="{{asset('themes-assets/images/trip/09.jpg')}}" data-caption="Everest Base Camp Trek"></a>
               </li>
               <!-- end -->
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- gallery section end -->

<!-- dates / prices section start -->
<section class="uk-section bg-light-blue" id="date">
   <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-column uk-flex-enter ">
         <div class="uk-text-center">
            <span class="section-tag uk-text-uppercase">Dates / Prices <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-primary fw-600  uk-margin-small-top">List of our Fixed Departure</h2>
         </div>
      </div>
      <div class="uk-padding uk-padding-remove-top uk-no-padding">
         <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-responsive uk-table-middle uk-table-divider">
               <thead class="uk-depature-thead">
                  <tr>
                     <th class="uk-text-bold" width="20%">
                        Date
                     </th>
                     <th class="uk-text-bold uk-text-center@m" width="20%">
                        Status
                     </th>
                     <th class="uk-text-bold uk-text-center@m" width="20%">
                        Group Size
                     </th>
                     <th class="uk-text-bold uk-text-center@m" width="50%">
                        Action
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="bg-white">
                     <td>
                        <strong>50 Days</strong>
                        <br> 2026-04-12-2026-05-31
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-text-success">Booking Open</span>
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-hidden@m"> Group Size </span> 1 - 2 PAX
                     </td>
                     <td class="uk-text-right@m" style="padding-bottom:18px;">
                        <a class="uk-small-btn uk-small-btn-primary" href="#enquiry-form" uk-toggle>Inquire Now</a>
                        <a class="uk-small-btn uk-small-btn-secondary" href="book.php">Book Now</a>
                     </td>
                  </tr>
                  <tr class="bg-white">
                     <td>
                        <strong>50 Days</strong>
                        <br> 2026-05-02-2026-05-12
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-text-danger">Booking Closed</span>
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-hidden@m"> Group Size </span> 1 - 2 PAX
                     </td>
                     <td class="uk-text-right@m" style="padding-bottom:18px;">
                        <a class="uk-small-btn uk-small-btn-primary" href="#enquiry-form" uk-toggle="">Inquire Now</a>
                        <a class="uk-small-btn uk-small-btn-secondary" href="book.php">Book Now</a>
                     </td>
                  </tr>
                  <tr class="bg-white">
                     <td>
                        <strong>50 Days</strong>
                        <br> 2026-04-12-2026-05-31
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-text-success">Booking Open</span>
                     </td>
                     <td class="uk-text-center@m">
                        <span class="uk-hidden@m"> Group Size </span> 1 - 2 PAX
                     </td>
                     <td class="uk-text-right@m" style="padding-bottom:18px;">
                        <a class="uk-small-btn uk-small-btn-primary" href="#enquiry-form" uk-toggle="">Inquire Now</a>
                        <a class="uk-small-btn uk-small-btn-secondary" href="book.php">Book Now</a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
<!-- dates / prices section end -->

<!-- Itinerary section start -->
<section class="uk-section bg-primary" id="itinerary">
   <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-column uk-flex-enter ">
         <div class="uk-text-center">
            <span class="section-tag uk-text-uppercase">Itinerary <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-white fw-600  uk-margin-small-top">Tailored Trip For You</h2>
         </div>
      </div>
      <div>
         <ul class="uk-padding uk-padding-remove-top uk-light uk-no-padding" uk-accordion="multiple: true">
            <li class="itinerary-wrapper">
               <a class="uk-accordion-title" href="#">
                  <div class="itinerary-day">
                     <div class="day-circle">Day 1</div>
                     <div class="itinerary-content">
                        <h4 class="text-white uk-margin-remove"><span class="day-tag">Day 1</span>Arrival In Kathmandu
                        </h4>
                        <div class="itinerary-info">
                           <div class="text-white"><b class="text-secondary">Meals:</b> BLD</div>
                           <div class="text-white"><b class="text-secondary">Accommodation:</b> Lodge</div>
                        </div>
                     </div>
                  </div>
               </a>
               <div class="uk-accordion-content ">
                  <div class="itinerary-day">
                     <div class="day-circle" style="visibility: hidden;">Day 1</div>
                     <div class="itinerary-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum, sit delectus
                           laudantium quas tempora officia quisquam amet nesciunt repudiandae illum ab perferendis.
                           Assumenda repellat tempora iusto dolores. Totam, quia.Lorem, ipsum dolor sit amet consectetur
                           adipisicing elit. Sequi, earum, sit delectus laudantium quas tempora officia quisquam amet
                           nesciunt repudiandae illum ab perferendis. Assumenda repellat tempora iusto dolores. Totam,
                           quia.</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="itinerary-wrapper">
               <a class="uk-accordion-title" href="#">
                  <div class="itinerary-day">
                     <div class="day-circle">Day 2</div>
                     <div class="itinerary-content">
                        <h4 class="text-white uk-margin-remove"><span class="day-tag">Day 2</span>Trek to Dobhan (1070m)
                           – 7 Hrs Trek</h4>
                        <div class="itinerary-info">
                           <div class="text-white"><b class="text-secondary">Meals:</b> BLD</div>
                           <div class="text-white"><b class="text-secondary">Accommodation:</b> Lodge</div>
                        </div>
                     </div>
                  </div>
               </a>
               <div class="uk-accordion-content ">
                  <div class="itinerary-day">
                     <div class="day-circle" style="visibility: hidden;">Day 2</div>
                     <div class="itinerary-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum, sit delectus
                           laudantium quas tempora officia quisquam amet nesciunt repudiandae illum ab perferendis.
                           Assumenda repellat tempora iusto dolores. Totam, quia.Lorem, ipsum dolor sit amet consectetur
                           adipisicing elit. Sequi, earum, sit delectus laudantium quas tempora officia quisquam amet
                           nesciunt repudiandae illum ab perferendis. Assumenda repellat tempora iusto dolores. Totam,
                           quia.</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="itinerary-wrapper">
               <a class="uk-accordion-title" href="#">
                  <div class="itinerary-day">
                     <div class="day-circle">Day 3</div>
                     <div class="itinerary-content">
                        <h4 class="text-white uk-margin-remove"><span class="day-tag">Day 3</span>Trek to Punggen
                           Monastery (4050m) – Samagaon (3520m) – 8hrs Trek</h4>
                        <div class="itinerary-info">
                           <div class="text-white"><b class="text-secondary">Meals:</b> BLD</div>
                           <div class="text-white"><b class="text-secondary">Accommodation:</b> Lodge</div>
                        </div>
                     </div>
                  </div>
               </a>
               <div class="uk-accordion-content ">
                  <div class="itinerary-day">
                     <div class="day-circle" style="visibility: hidden;">Day 3</div>
                     <div class="itinerary-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum, sit delectus
                           laudantium quas tempora officia quisquam amet nesciunt repudiandae illum ab perferendis.
                           Assumenda repellat tempora iusto dolores. Totam, quia.Lorem, ipsum dolor sit amet consectetur
                           adipisicing elit. Sequi, earum, sit delectus laudantium quas tempora officia quisquam amet
                           nesciunt repudiandae illum ab perferendis. Assumenda repellat tempora iusto dolores. Totam,
                           quia.</p>
                     </div>
                  </div>
               </div>
            </li>
            <li class="itinerary-wrapper">
               <a class="uk-accordion-title" href="#">
                  <div class="itinerary-day">
                     <div class="day-circle">Day 4</div>
                     <div class="itinerary-content">
                        <h4 class="text-white uk-margin-remove"><span class="day-tag">Day 4</span>Trek to Dharapani
                           (1963m), Drive to Besisahar and Then to Kathmandu</h4>
                        <div class="itinerary-info">
                           <div class="text-white"><b class="text-secondary">Meals:</b> BLD</div>
                           <div class="text-white"><b class="text-secondary">Accommodation:</b> Lodge</div>
                        </div>
                     </div>
                  </div>
               </a>
               <div class="uk-accordion-content ">
                  <div class="itinerary-day">
                     <div class="day-circle" style="visibility: hidden;">Day 4</div>
                     <div class="itinerary-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, earum, sit delectus
                           laudantium quas tempora officia quisquam amet nesciunt repudiandae illum ab perferendis.
                           Assumenda repellat tempora iusto dolores. Totam, quia.Lorem, ipsum dolor sit amet consectetur
                           adipisicing elit. Sequi, earum, sit delectus laudantium quas tempora officia quisquam amet
                           nesciunt repudiandae illum ab perferendis. Assumenda repellat tempora iusto dolores. Totam,
                           quia.</p>
                     </div>
                  </div>
               </div>
            </li>

         </ul>
      </div>
   </div>
</section>
<!-- Itinerary section end -->

<!-- cost includes/ excludes  section start -->
<section class="uk-section uk-white-shape-bottom uk-position-relative" id="include">
   <div class="uk-container uk-container-large">
      <div class=" uk-child-width-1-2@m uk-grid-divider uk-grid">
         <div class="uk-margin-small-bottom">
            <span class="section-tag uk-text-uppercase">Cost includes <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <ul class="uk-include-ul">
               <li>The diverse landscapes of the Manaslu Massif, a less-frequented region.</li>
               <li>Optimal acclimatization with the ascent to Manaslu Base Camp, surrounded by stunning panoramas.</li>
               <li>Trekking along the Budhi Gandaki River Gorge after a scenic trip from Kathmandu to Machha Khola.</li>
               <li>Experience the striking contrast of landscapes on this trek, where narrow trails lead to wide
                  pastures and lush green valley’s transition into glacial moraines</li>
            </ul>
         </div>
         <div>
            <span class="section-tag uk-text-uppercase">Cost Excludes <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <ul class="uk-exclude-ul">
               <li>The diverse landscapes of the Manaslu Massif, a less-frequented region.</li>
               <li>Optimal acclimatization with the ascent to Manaslu Base Camp, surrounded by stunning panoramas.</li>
               <li>Trekking along the Budhi Gandaki River Gorge after a scenic trip from Kathmandu to Machha Khola.</li>
               <li>Experience the striking contrast of landscapes on this trek, where narrow trails lead to wide
                  pastures and lush green valley’s transition into glacial moraines</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- cost includes/ excludes  section end -->

<!-- useful info section start -->
<section class="uk-section bg-light-blue" id="info">
   <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-column uk-flex-enter ">
         <div class="uk-text-center">
            <span class="section-tag uk-text-uppercase">Information <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-primary fw-600  uk-margin-small-top">What You Need To Know</h2>
         </div>
      </div>
      <div class="uk-padding">
         <ul uk-accordion class="uk-best-ul">
            <li class="uk-faq-li">
               <a class="uk-accordion-title fw-600 uk-text-uppercase  uk-faq-title" href>Get in peak physical
                  condition</a>
               <div class="uk-accordion-content uk-faq-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua.</p>
               </div>
            </li>
            <li class="uk-faq-li">
               <a class="uk-accordion-title fw-600 uk-text-uppercase uk-faq-title" href>Acclimatization is key</a>
               <div class="uk-accordion-content uk-faq-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua.</p>
               </div>
            </li>
            <li class="uk-faq-li">
               <a class="uk-accordion-title fw-600 uk-text-uppercase  uk-faq-title" href>Gear up for success</a>
               <div class="uk-accordion-content uk-faq-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua.</p>
               </div>
            </li>
            <li class="uk-faq-li">
               <a class="uk-accordion-title fw-600 uk-text-uppercase  uk-faq-title" href>EATING AND DRINKING</a>
               <div class="uk-accordion-content uk-faq-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua.</p>
               </div>
            </li>

         </ul>
      </div>
   </div>
</section>
<!-- useful info section end -->

<!-- review section start -->
<section class="uk-section uk-position-relative uk-section  uk-background-norepeat 
      uk-background-cover" uk-parallax="bgx: -200; easing: 2;" data-src="{{asset('themes-assets/img/review.png')}}" uk-img id="review">
   <div class="uk-overlay-blue uk-position-cover "></div>
   <div class="uk-container-large uk-container uk-position-relative">
      <div class="uk-grid-collapse" uk-grid>
         <div class="uk-width-2-3@s">
            <span class="section-tag">Traveler's Review <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-white fw-600 uk-margin-small-top">Know What Our Customers Say</h2>
         </div>
         <div class="uk-width-1-3@s  uk-flex uk-flex-left uk-flex-right@s uk-flex-middle">
            <a href="#review-form" uk-toggle class="uk-flex uk-btn uk-btn-secondary">
               <div class="uk-btn-front">
                  Write a Review
               </div>
               <div class="uk-btn-back">
                  <i class="fa-solid fa-circle-arrow-right"></i>

               </div>
            </a>
         </div>
      </div>
      <div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slider>

         <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-grid ">
            <div class="mt-65">
               <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small bg-white">
                  <div>
                     <img src="{{asset('themes-assets/img/04.png')}}" alt="" class="uk-client-img" loading="lazy">
                  </div>
                  <div class="uk-margin-small-top">
                     <div class="uk-flex uk-flex-between uk-flex-middle">
                        <div>
                           <h4 class="f-20 uk-text-bold uk-margin-remove text-primary">Customer Name</h4>
                           <small class="f-16">Company Name</small>
                        </div>
                        <div>
                           <div class="uk-flex uk-flex-right">
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                           </div>
                        </div>
                     </div>
                     <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem
                        Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                     <button class="read-more-btn">Read More </button>
                  </div>
               </div>
            </div>
            <div class="mt-65">
               <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small bg-white">
                  <div>
                     <img src="{{asset('themes-assets/img/01.png')}}" alt="" class="uk-client-img" loading="lazy">
                  </div>
                  <div class="uk-margin-small-top">
                     <div class="uk-flex uk-flex-between uk-flex-middle">
                        <div>
                           <h4 class="f-20 uk-text-bold uk-margin-remove text-primary">Customer Name</h4>
                           <small class="f-16">Company Name</small>
                        </div>
                        <div>
                           <div class="uk-flex uk-flex-right">
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                           </div>
                        </div>
                     </div>
                     <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem
                        Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                     <button class="read-more-btn">Read More </button>
                  </div>
               </div>
            </div>
            <div class="mt-65">
               <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small bg-white">
                  <div>
                     <img src="{{asset('themes-assets/img/02.png')}}" alt="" class="uk-client-img" loading="lazy">
                  </div>
                  <div class="uk-margin-small-top">
                     <div class="uk-flex uk-flex-between uk-flex-middle">
                        <div>
                           <h4 class="f-20 uk-text-bold uk-margin-remove text-primary">Customer Name</h4>
                           <small class="f-16">Company Name</small>
                        </div>
                        <div>
                           <div class="uk-flex uk-flex-right">
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                           </div>
                        </div>
                     </div>
                     <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem
                        Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                     <button class="read-more-btn">Read More </button>
                  </div>
               </div>
            </div>
            <div class="mt-65">
               <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small bg-white">
                  <div>
                     <img src="{{asset('themes-assets/img/03.pn')}}g" alt="" class="uk-client-img" loading="lazy">
                  </div>
                  <div class="uk-margin-small-top">
                     <div class="uk-flex uk-flex-between uk-flex-middle">
                        <div>
                           <h4 class="f-20 uk-text-bold uk-margin-remove text-primary">Customer Name</h4>
                           <small class="f-16">Company Name</small>
                        </div>
                        <div>
                           <div class="uk-flex uk-flex-right">
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                              <i class="fa-solid fa-star text-secondary f-16"></i>
                           </div>
                        </div>
                     </div>
                     <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem
                        Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                     <button class="read-more-btn">Read More </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-flex uk-flex-center">
            <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous
               uk-slider-item="previous" style="left: 18px !important;"></a>
            <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next
               uk-slider-item="next"></a>
         </div>
      </div>
   </div>
</section>
<!-- review section end -->

<!-- similar trip section start -->
<section class="uk-section">
   <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-column uk-flex-enter ">
         <div class="uk-text-center">
            <span class="section-tag uk-text-uppercase">Similar Trips <i
                  class="fa-solid fa-plane uk-margin-small-left"></i></span>
            <h2 class="text-primary fw-600  uk-margin-small-top">Similar Trip You May Like</h2>
         </div>
      </div>
      <div class=" uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small" uk-grid>
         <div class="uk-margin-top">
            <div class="uk-travel-card bg-light-grey">
               <div>
                  <a href="#" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                     <img src="{{asset('themes-assets/img/about.jpeg')}}" class="border-rounded uk-transition-scale-up uk-transition-opaque"
                        loading="lazy" height="500" width="500" alt="">
                  </a>
               </div>
               <div class="uk-travel-text uk-grid-collapse uk-grid ">
                  <div class="uk-width-2-3">
                     <a href="#" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
                  </div>
                  <div class="uk-width-1-3  text-primary uk-text-right ">
                     <i class="fa-solid fa-star text-secondary"></i> 4.0
                  </div>
               </div>
               <div class="uk-travel-price uk-flex uk-flex-between">
                  <div>
                     <span>
                        <b class="text-primary f-18">$1234</b>
                     </span>
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                     11-15 Days
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-margin-top">
            <div class="uk-travel-card bg-light-grey">
               <div>
                  <a href="#" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                     <img src="{{asset('themes-assets/img/about.jpeg')}}" class="border-rounded uk-transition-scale-up uk-transition-opaque"
                        loading="lazy" height="500" width="500" alt="">
                  </a>
               </div>
               <div class="uk-travel-text uk-grid-collapse uk-grid ">
                  <div class="uk-width-2-3">
                     <a href="#" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
                  </div>
                  <div class="uk-width-1-3  text-primary uk-text-right ">
                     <i class="fa-solid fa-star text-secondary"></i> 4.0
                  </div>
               </div>
               <div class="uk-travel-price uk-flex uk-flex-between">
                  <div>
                     <span>
                        <b class="text-primary f-18">$1234</b>
                     </span>
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                     11-15 Days
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-margin-top">
            <div class="uk-travel-card bg-light-grey">
               <div>
                  <a href="#" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                     <img src="{{asset('themes-assets/img/about.jpeg')}}" class="border-rounded uk-transition-scale-up uk-transition-opaque"
                        loading="lazy" height="500" width="500" alt="">
                  </a>
               </div>
               <div class="uk-travel-text uk-grid-collapse uk-grid ">
                  <div class="uk-width-2-3">
                     <a href="#" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
                  </div>
                  <div class="uk-width-1-3  text-primary uk-text-right ">
                     <i class="fa-solid fa-star text-secondary"></i> 4.0
                  </div>
               </div>
               <div class="uk-travel-price uk-flex uk-flex-between">
                  <div>
                     <span>
                        <b class="text-primary f-18">$1234</b>
                     </span>
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                     11-15 Days
                  </div>
               </div>
            </div>
         </div>
         <div class="uk-margin-top">
            <div class="uk-travel-card bg-light-grey">
               <div>
                  <a href="#" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                     <img src="{{asset('themes-assets/img/about.jpeg')}}" class="border-rounded uk-transition-scale-up uk-transition-opaque"
                        loading="lazy" height="500" width="500" alt="">
                  </a>
               </div>
               <div class="uk-travel-text uk-grid-collapse uk-grid ">
                  <div class="uk-width-2-3">
                     <a href="#" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
                  </div>
                  <div class="uk-width-1-3  text-primary uk-text-right ">
                     <i class="fa-solid fa-star text-secondary"></i> 4.0
                  </div>
               </div>
               <div class="uk-travel-price uk-flex uk-flex-between">
                  <div>
                     <span>
                        <b class="text-primary f-18">$1234</b>
                     </span>
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                  </div>
                  <div class="uk-flex uk-flex-middle">
                     <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                     11-15 Days
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- similar trip section end -->

<!-- enquiry model form -->
<div id="enquiry-form" uk-modal>
   <div class="uk-modal-dialog uk-modal-body uk-padding-remove">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="bg-primary uk-padding-small uk-custom-padding">
         <div class="uk-padding-small">
            <h4 class="text-white fw-600 uk-text-uppercase uk-margin-remove ">Have Question?</h4>
            <p class="uk-text-uppercase text-white uk-margin-remove">Mt. Annapurna Trekking</p>
         </div>
      </div>
      <div class="uk-padding">

         <fieldset class="uk-fieldset">
            <!--  -->
            <div class="uk-child-width-1-2@m uk-text-left uk-grid-small" uk-grid>
               <div>
                  <label for="first_name" class="text-primary">First Name <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="first_name"
                     placeholder="First Name *" required>
               </div>
               <div>
                  <label for="last_name" class="text-primary">Last Name <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="last_name" placeholder="Last Name *"
                     required>
               </div>
               <div>
                  <label for="country" class="text-primary">Country Name <span class="uk-text-danger">*</span></label>
                  <select class="uk-select bg-text border-rounded" name="country" required>
                     <!--<option value="">Select Your Country *</option>-->
                     <option value="">Select Country</option>
                     <option value="Afghanistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="American Samoa">American Samoa</option>
                  </select>
               </div>
               <div>
                  <label for="email" class="text-primary">Email <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="email" placeholder="Email *"
                     required>
               </div>
               <div>
                  <label for="phone" class="text-primary">Phone <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="phone" placeholder="Phone(Landline)">
               </div>
               <div>
                  <label for="people" class="text-primary">No of People</label>
                  <input class="uk-input bg-text border-rounded" type="number" name="people" placeholder="No of People">
               </div>
               <div>
                  <label for="phone" class="text-primary">Duration of Stay</label>
                  <input class="uk-input bg-text border-rounded" type="text" name="stay" placeholder="Duration of Stay">
               </div>
            </div>
            <!--  -->
            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-small-top uk-margin-bottom "
               uk-grid>
               <div>
                  <label for="comments" class="text-primary">Please tell us more about yourself to help you
                     better.</label>
                  <textarea name="comments" class="uk-textarea bg-text border-rounded" rows="4"
                     placeholder="Write your message here"></textarea>
               </div>
            </div>
            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top  " uk-grid>
               <div>
                  <button type="submit" class="uk-small-btn uk-small-btn-primary" style="border:none;">SUBMIT<span
                        uk-icon="icon: arrow-right"></span></button>
               </div>
            </div>

         </fieldset>
      </div>

   </div>
</div>

<!-- review model form -->
<div id="review-form" uk-modal>
   <div class="uk-modal-dialog uk-modal-body uk-padding-remove">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="bg-primary uk-padding-small uk-custom-padding">
         <div class="uk-padding-small">
            <h4 class="text-white fw-600 uk-text-uppercase uk-margin-remove ">Give us your review</h4>

         </div>
      </div>
      <div class="uk-padding">

         <fieldset class="uk-fieldset">
            <!--  -->
            <div class="uk-child-width-1-2@m uk-text-left uk-grid-small" uk-grid>
               <div>
                  <label for="fname" class="text-primary">First Name <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="fname" placeholder="First Name *"
                     required>
               </div>
               <div>
                  <label for="lname" class="text-primary">Last Name <span class="uk-text-danger">*</span></label>
                  <input class="uk-input bg-text border-rounded" type="text" name="lname" placeholder="Last Name *"
                     required>
               </div>
               <div>
                  <label for="cname" class="text-primary">Company Name</label>
                  <input class="uk-input bg-text border-rounded" type="text" name="cname" placeholder="Company Name *"
                     required>
               </div>

               <div>
                  <label class="uk-form-label uk-text-bold" for="">Rating</label>
                  <div class="star-rating">
                     <input type="radio" id="5-stars" name="rating" value="5">
                     <label for="5-stars" class="star">&#9733;</label>
                     <input type="radio" id="4-stars" name="rating" value="4">
                     <label for="4-stars" class="star">&#9733;</label>
                     <input type="radio" id="3-stars" name="rating" value="3">
                     <label for="3-stars" class="star">&#9733;</label>
                     <input type="radio" id="2-stars" name="rating" value="2">
                     <label for="2-stars" class="star">&#9733;</label>
                     <input type="radio" id="1-star" name="rating" value="1">
                     <label for="1-star" class="star">&#9733;</label>
                  </div>
               </div>

            </div>
            <!--  -->
            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-small-top uk-margin-bottom "
               uk-grid>
               <div>
                  <label for="comments" class="text-primary">Please tell us more about your trip with us.</label>
                  <textarea name="comments" class="uk-textarea bg-text border-rounded" rows="4"
                     placeholder="Write your message here"></textarea>
               </div>
            </div>
            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top  " uk-grid>
               <div>
                  <button type="submit" class="uk-small-btn uk-small-btn-primary" style="border:none;">SUBMIT<span
                        uk-icon="icon: arrow-right"></span></button>
               </div>
            </div>

         </fieldset>
      </div>

   </div>
</div>

<script>
   // Custom smooth scrolling with offset
   document.querySelectorAll('.sidenav a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function (event) {
         event.preventDefault();

         const target = document.querySelector(this.getAttribute("href"));

         if (target) {
            window.scrollTo({
               top: target.offsetTop - 120,
               behavior: "smooth"
            });
         }
      });
   });

   // UIkit scrollspyNav only for active state — no scrolling
   spyNav = UIkit.scrollspyNav(".sidenav", {
      closest: "a", // or "li" depending on where you want .uk-active
      scroll: false,
      offset: 120, // same as your scroll offset for accuracy
      cls: "uk-active"
   });
</script>

<script>
   document.querySelectorAll('.read-more-btn').forEach(btn => {
      btn.addEventListener('click', function () {
         const text = this.previousElementSibling;

         text.classList.toggle('expanded');

         this.textContent = text.classList.contains('expanded') ?
            "Read Less" :
            "Read More";
      });
   });
</script>

@stop