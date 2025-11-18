@extends('themes.default.common.master')
@section('content')

<!-- banner section start -->
<div class="bg-light-blue uk-homepage-banner uk-position-relative" uk-scrollspy="cls: uk-animation-fade; target: h1,p,a; delay: 200;">
   
    <div class="uk-text-center uk-homepage-banner-text uk-width-1-1" style="padding: 35px;">
        <h1 class="text-primary fw-600 uk-margin-remove uk-h1">Adventure Awaits <span class="text-secondary">In The Mountain</span></h1>
        <p class="text-primary fw-600 uk-margin-small-top">Our handpicked itineraries for your next holidays</p>
        <div>
            <a href="list.php" class="uk-small-btn uk-small-btn-primary">
                View Trips <span uk-icon="icon: arrow-right"></span>
            </a>
        </div>
    </div>
     <img src="assets/img/banner.png" alt="" loading="lazy">
</div>
<!-- banner section end -->

<!-- about section start -->
<section class="uk-section-large bg-primary uk-padding-remove-top">
    <div class="uk-container-large uk-container pt-40">
        <div class="uk-flex uk-flex-middle" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-grid-collapse uk-grid" uk-scrollspy="cls: uk-animation-fade; target: h2,img; delay: 200;">
                    <div class="uk-width-auto">
                        <div class="rotated-text">
                            <h2 class="text-secondary">27 YEARS OF <span class="text-white">EXCELLENCE</span></h2>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-media-400">
                            <img src="assets/img/mountain/mountain-1.jpeg" alt="" class="about-img" loading="lazy">
                        </div>

                    </div>

                </div>
            </div>
            <div class="uk-width-2-3@m" uk-scrollspy="cls: uk-animation-fade; target: span,h1,p,a; delay: 200;">
                <div>
                    <span class="section-tag">Trending Destination <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                    <h1 class="text-white fw-600 uk-margin-small-top">Experience New Destination</h1>
                    <p class="text-white uk-text-justify">
                        Max Trekking is your trusted companion for unforgettable mountain adventures across Nepal. We offer expertly guided treks, tailored itineraries, and authentic local experiences designed for every level of traveler. With safety, comfort, and responsible tourism at our core, we help you explore the Himalayas the right way. <br><br>Max Trekking is your trusted companion for unforgettable mountain adventures across Nepal. We offer expertly guided treks, tailored itineraries, and authentic local experiences designed for every level of traveler. With safety, comfort, and responsible tourism at our core, we help you explore the Himalayas the right way. At Max Trekking, we believe that every journey into the Himalayas should be inspiring, safe, and deeply meaningful. Based in Nepal, we specialize in organizing guided treks, expeditions, and custom adventure trips across some of the world’s most iconic trails.
                    </p>
                    <a href="about.php" class="uk-small-btn uk-small-btn-white">
                        View More <span uk-icon="icon: arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- trekking section start -->
<section class="uk-section bg-light-blue uk-blue-shape-bottom uk-position-relative">
    <div class="uk-container-large uk-container">
        <div>
            <div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slider>
                <div class="uk-margin-medium-bottom" uk-grid uk-scrollspy="cls: uk-animation-fade; target: span,h1,a; delay: 200;">
                    <div class="uk-width-2-3@s">
                        <span class="section-tag">Traveler's Choice <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                        <h1 class="text-primary fw-600 uk-margin-small-top">Featured Trekking Iternaries </h1>
                    </div>
                    <div class="uk-width-1-3@s uk-visible@s">
                        <div class="uk-flex uk-flex-right">
                            <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous uk-slider-item="previous" style="left: 18px !important;"></a>
                            <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m  uk-child-width-1-4@l  uk-grid uk-grid-small " uk-scrollspy="cls: uk-animation-fade; target: .uk-travel-card; delay: 200;">
                    <div>
                        <div class="uk-travel-card bg-white">
                            <div>
                                <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                                    <img src="assets/img/mountain/mountain-2.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                                </a>
                            </div>
                            <div class="uk-travel-text uk-grid-collapse uk-grid ">
                                <div class="uk-width-2-3">
                                    <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                    <div>
                        <div class="uk-travel-card bg-white">
                            <div>
                                <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                                    <img src="assets/img/mountain/mountain-3.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                                </a>
                            </div>
                            <div class="uk-travel-text uk-grid-collapse uk-grid ">
                                <div class="uk-width-2-3">
                                    <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                    <div>
                        <div class="uk-travel-card bg-white">
                            <div>
                                <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                                    <img src="assets/img/mountain/mountain-4.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                                </a>
                            </div>
                            <div class="uk-travel-text uk-grid-collapse uk-grid ">
                                <div class="uk-width-2-3">
                                    <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                    <div>
                        <div class="uk-travel-card bg-white">
                            <div>
                                <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                                    <img src="assets/img/mountain/mountain1.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                                </a>
                            </div>
                            <div class="uk-travel-text uk-grid-collapse uk-grid ">
                                <div class="uk-width-2-3">
                                    <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                    <div>
                        <div class="uk-travel-card bg-white">
                            <div>
                                <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                                    <img src="assets/img/mountain/mountain2.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                                </a>
                            </div>
                            <div class="uk-travel-text uk-grid-collapse uk-grid ">
                                <div class="uk-width-2-3">
                                    <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-flex uk-flex-center uk-hidden@s">
                    <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous uk-slider-item="previous" style="left: 18px !important;"></a>
                    <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trekking section end -->

<!-- destination section start -->
<section class="uk-section">
    <div class="uk-container-large uk-container">
        <div>
            <div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slider>
                <div class="uk-margin-medium-bottom" uk-grid uk-scrollspy="cls: uk-animation-fade; target: span,h1,a; delay: 200;">
                    <div class="uk-width-2-3@s">
                        <span class="section-tag">Trending Destination <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                        <h1 class="text-primary fw-600 uk-margin-small-top">Experience New Destination </h1>
                    </div>
                    <div class="uk-width-1-3@s uk-visible@s">
                        <div class="uk-flex uk-flex-right">
                            <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous uk-slider-item="previous" style="left: 18px !important;"></a>
                            <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid uk-grid-small" uk-scrollspy="cls: uk-animation-fade; target: .uk-region; delay: 200;">
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain1.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">everest region</h2>
                            </div>
                        </a>
                    </div>
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain2.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">everest region</h2>
                            </div>
                        </a>
                    </div>
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain3.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">Annapurna region</h2>
                            </div>
                        </a>
                    </div>
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain4.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">Makalu region</h2>
                            </div>
                        </a>
                    </div>
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain5.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">lantang region</h2>
                            </div>
                        </a>
                    </div>
                    <div class="uk-region">
                        <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle border uk-media-400 border-rounded">
                            <img src="assets/img/mountain/mountain6.jpeg" class="border uk-transition-scale-up uk-transition-opaque" loading="lazy" alt="">
                            <div class="uk-overlay-default uk-position-cover uk-destination-overlay"></div>
                            <div class="uk-overlay uk-position-center ">
                                <h2 class="uk-text-uppercase uk-text-bold uk-text-center text-white f-28">Manasulu region</h2>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="uk-flex uk-flex-center uk-hidden@s">
                    <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous uk-slider-item="previous" style="left: 18px !important;"></a>
                    <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- destination section end -->

<!-- package section start -->
<section class="uk-section bg-light-blue">
    <div class="uk-container-large uk-container">
        <div uk-grid uk-scrollspy="cls: uk-animation-fade; target: span,h1,a; delay: 200;">
            <div class="uk-width-2-3@s">
                <span class="section-tag">Traveler's Tours <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                <h1 class="text-primary fw-600 uk-margin-small-top">Featured travel Packages</h1>
            </div>
            <div class="uk-width-1-3@s uk-visible@s uk-flex uk-flex-right uk-flex-middle">
                <a href="list.php" class="uk-flex uk-btn uk-btn-primary">
                    <div class="uk-btn-front">
                        View All Trip
                    </div>
                    <div class="uk-btn-back">
                        <i class="fa-solid fa-circle-arrow-right"></i>

                    </div>
                </a>
            </div>
        </div>
        <div class=" uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-travel-card; delay: 200;">
            <div class="uk-margin-top">
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain1.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain2.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain3.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain4.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain5.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain6.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain-1.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
                <div class="uk-travel-card bg-white">
                    <div>
                        <a href="detail.php" class="uk-media-220 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain-2.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-2-3">
                            <a href="detail.php" class="two-line">Annapurna Base Camp Trek- 15 Days</a>
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
        <div class=" uk-margin-top uk-hidden@s">
            <a href="list.php" class="uk-flex uk-btn uk-btn-primary uk-flex-center uk-flex-middle">
                <div class="uk-btn-front">
                    View All Trip
                </div>
                <div class="uk-btn-back">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- package section end -->

<!-- review section start -->
<section class="uk-section">
    <div class="uk-container-large uk-container">
        <div class="uk-grid-collapse" uk-grid uk-scrollspy="cls: uk-animation-fade; target: span,h1,img; delay: 200;">
            <div class="uk-width-2-3@s">
                <span class="section-tag">Traveler's Review <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                <h1 class="text-primary fw-600 uk-margin-small-top">Know What Our Customers Say</h1>
            </div>
            <div class="uk-width-1-3@s  uk-flex uk-flex-center uk-flex-right@s uk-flex-middle">
                <img src="assets/img/trip.png" height="150" alt="" loading="lazy" style="height:85px;">
            </div>
        </div>
        <div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slider>

            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-grid " uk-scrollspy="cls: uk-animation-fade; target: .mt-65; delay: 200;">
                <div class="mt-65">
                    <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small">
                        <div>
                            <img src="assets/img/04.png" alt="" class="uk-client-img" loading="lazy">
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
                            <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <button class="read-more-btn">Read More </button>
                        </div>
                    </div>
                </div>
                <div class="mt-65">
                    <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small">
                        <div>
                            <img src="assets/img/01.png" alt="" class="uk-client-img" loading="lazy">
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
                            <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <button class="read-more-btn">Read More </button>
                        </div>
                    </div>
                </div>
                <div class="mt-65">
                    <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small">
                        <div>
                            <img src="assets/img/02.png" alt="" class="uk-client-img" loading="lazy">
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
                            <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <button class="read-more-btn">Read More </button>
                        </div>
                    </div>
                </div>
                <div class="mt-65">
                    <div class="uk-client-review uk-box-shadow-small border-rounded uk-padding-small">
                        <div>
                            <img src="assets/img/03.png" alt="" class="uk-client-img" loading="lazy">
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
                            <p class="review-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <button class="read-more-btn">Read More </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-flex uk-flex-center">
                <a class="uk-position-bottom-right uk-position-small arrow-prev" href uk-slidenav-previous uk-slider-item="previous" style="left: 18px !important;"></a>
                <a class="uk-position-bottom-right uk-position-small arrow-next " href uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>
    </div>
</section>
<!-- review section end -->

<!-- blog section start -->
<section class="uk-section bg-light-blue">
    <div class="uk-container-large uk-container">
        <div uk-grid uk-scrollspy="cls: uk-animation-fade; target: span,h1,a; delay: 200;">
            <div class="uk-width-2-3@s">
                <span class="section-tag">Blog / Articles <i class="fa-solid fa-plane uk-margin-small-left"></i></span>
                <h1 class="text-primary fw-600 uk-margin-small-top">Featured Blogs & Articles</h1>
            </div>
            <div class="uk-width-1-3@s uk-visible@s uk-flex uk-flex-right uk-flex-middle">
                <a href="blog.php" class="uk-flex uk-btn uk-btn-primary">
                    <div class="uk-btn-front">
                        View All Blogs
                    </div>
                    <div class="uk-btn-back">
                        <i class="fa-solid fa-circle-arrow-right"></i>

                    </div>
                </a>
            </div>
        </div>
        <div class=" uk-child-width-1-1 uk-child-width-1-2@s uk-grid-small" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-blog-card; delay: 200;">
            <div class="uk-margin-top">
                <div class="uk-blog-card">
                    <div>
                        <a href="blog-detail.php" class="uk-media-260 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/mountain/mountain-4.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-1-1">
                            <a href="blog-detail.php" class="two-line">
                                <h3 class="f-20 fw-600 uk-margin-remove">Annapurna Base Recommended Packing List for Everest Three Passes Trek Camp Trek - 14 Days</h3>
                            </a>
                        </div>
                    </div>
                    <div class="uk-travel-price uk-margin-remove uk-grid-collapse uk-flex uk-flex-middle" uk-grid>
                        <div class=" uk-width-1-2@m uk-width-2-3@l">
                            <div class="uk-flex " style="gap:25px;">
                                <div class="uk-flex uk-flex-middle text-primary fw-600">
                                    <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                                </div>
                                <div class="uk-flex uk-flex-middle text-primary fw-600">
                                    <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                                    June 24,2025
                                </div>
                            </div>
                        </div>
                        <div class=" uk-width-1-2@m uk-width-1-3@l uk-flex uk-flex-left uk-flex-right@m uk-flex-middle uk-margin-small-top">
                            <a href="blog-detail.php" class="uk-flex uk-btn uk-btn-primary">
                                <div class="uk-btn-front">
                                    View The Blog
                                </div>
                                <div class="uk-btn-back">
                                    <i class="fa-solid fa-circle-arrow-right"></i>

                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-blog-card">
                    <div>
                        <a href="blog-detail.php" class="uk-media-260 uk-inline-clip uk-transition-toggle border-rounded">
                            <img src="assets/img/about.jpeg" class="border-rounded uk-transition-scale-up uk-transition-opaque" loading="lazy" height="500" width="500" alt="">
                        </a>
                    </div>
                    <div class="uk-travel-text uk-grid-collapse uk-grid ">
                        <div class="uk-width-1-1">
                            <a href="blog-detail.php" class="two-line">
                                <h3 class="f-20 fw-600 uk-margin-remove">Annapurna Base Recommended Packing List for Everest Three Passes Trek Camp Trek - 14 Days</h3>
                            </a>
                        </div>
                    </div>
                    <div class="uk-travel-price uk-margin-remove uk-grid-collapse uk-flex uk-flex-middle" uk-grid>
                        <div class=" uk-width-1-2@m uk-width-2-3@l">
                            <div class="uk-flex " style="gap:25px;">
                                <div class="uk-flex uk-flex-middle text-primary fw-600">
                                    <span uk-icon="icon: location" class="uk-margin-small-right text-secondary"></span>Nepal
                                </div>
                                <div class="uk-flex uk-flex-middle text-primary fw-600">
                                    <span uk-icon="icon: calendar" class="uk-margin-small-right text-secondary"></span>
                                    June 24,2025
                                </div>
                            </div>
                        </div>
                        <div class=" uk-width-1-2@m uk-width-1-3@l uk-flex uk-flex-left uk-flex-right@m uk-flex-middle uk-margin-small-top">
                            <a href="blog-detail.php" class="uk-flex uk-btn uk-btn-primary">
                                <div class="uk-btn-front">
                                    View The Blog
                                </div>
                                <div class="uk-btn-back">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=" uk-margin-top uk-hidden@s">
            <a href="blog.php" class="uk-flex uk-btn uk-btn-primary uk-flex-center uk-flex-middle">
                <div class="uk-btn-front">
                    View All Blogs
                </div>
                <div class="uk-btn-back">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- blog section end -->

<!-- contact section start -->
<section class="uk-section uk-section-small uk-padding-remove-bottom bg-light-blue" uk-scrollspy="cls: uk-animation-fade; target: img,p,a; delay: 200;">
    <div class="uk-container uk-container-small">
        <div class="border-rounded bg-primary uk-text-center uk-padding uk-blue-contact">
            <img src="assets/img/logo_white.png" alt="" loading="lazy">
            <p class="text-white">Allow our experts to help you plan one of the most memorable vacations based on your interests. With their in-depth knowledge and expertise of the Himalayas, craft the journey of your dreams taking into account your preferred location, time frame, and budget. For a beautiful vacation on top of the globe, contact us.</p>
            <div class="uk-flex uk-flex-center uk-flex-middle">
                <a href="contact.php" class="uk-flex uk-btn uk-btn-secondary">
                    <div class="uk-btn-front">
                        Contact Us
                    </div>
                    <div class="uk-btn-back">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->

<script>
    document.querySelectorAll('.read-more-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const text = this.previousElementSibling;

            text.classList.toggle('expanded');

            this.textContent = text.classList.contains('expanded') ?
                "Read Less" :
                "Read More";
        });
    });
</script>

@endsection