@extends('themes.default.common.master')
@section('content')
<section class="uk-header-inner  uk-padding uk-position-relative  uk-background-cover uk-light" data-src=" " uk-img>


    <div class=" uk-container uk-text-center ">
        <h1>Trip Booking </h1>
        <ul class="uk-breadcrumb-custom uk-text-center uk-margin-top-remove">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active"><span>Trip Booking</span></li>
        </ul>
    </div>


    <div class="uk-overlay "></div>
</section>


<section class="uk-section-padding-medium  pattern-mountain">
    <div class=" uk-container-small uk-container    ">
        <!--  -->
        <!-- <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-2@m uk-text-left" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="booking">
                        <h3><span>1</span>Select a Trip</h3>
                        <ul class="uk-theme-icon ">
                            <li>Select Trip</li>
                            <li>Select Trip Date</li>
                            <li>Select Number of Traveler</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="booking">
                        <h3><span>2</span>Submit Traveler's Information</h3>
                        <ul class="uk-theme-icon">
                            <li>Personal Information</li>
                            <li>Flight Details</li>
                            <li>Special Requirement</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div> -->
        <!--  -->
        <!--  -->
        <form method="POST" action="{{ route('post-trip') }}" id="booking_form">
            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left" uk-grid>
                <!-- Select trip -->
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div>
                        @csrf
                        <input type="hidden" id="g_recaptcha_response" name="g-captcha-response" />
                        <input type="hidden" name="trip_id" value="{{$booking->id}}">
                        <input type="hidden" name="title" value="{{$booking->trip_title}}">
                        @include('themes.default.common.flash-message')
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend uk-text-theme ">Select Trip</legend>
                                <div class="uk-margin">
                                    <input class="uk-input" value="{{$booking->trip_title}}" name="departure_date" type="text" disabled>
                                </div>
                                <div class="uk-child-width-1-2@s uk-child-width-1-2m uk-text-left" uk-grid>
                                    <div>
                                        <div class="uk-inline" style="width: 100%;">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                            <input class="uk-input datepicker " name="departure_date" type="text" placeholder="Trip Start Date *" required>
                                        </div>
                                    </div>
                                    <div>
                                        <input class="uk-input" name="num_people" type="text" placeholder="Number of people *" required>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                
                <!-- Personal Requirement -->
                <div>
                    <!-- Personal Information -->
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <div>
                                <fieldset class="uk-fieldset">
                                    <legend class="uk-legend uk-text-theme uk-margin-bottom">Personal Information</legend>
                                    <!--  -->
                                    <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                                        <div>
                                            <input class="uk-input" type="text" name="first_name" placeholder="First Name *" required>
                                        </div>
                                        <div>
                                            <input class="uk-input" type="text" name="last_name" placeholder="Last Name *" required>
                                        </div>
                                        <div>
                                            <div class="uk-inline" style="width: 100%;">
                                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                                <input class="uk-input datepicker " type="text" placeholder="Date of Birth" name="dob">
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>

                                        <div>
                                            <select class="uk-select" name="country" required>
                                                <!--<option value="">Select Your Country *</option>-->
                                                @include('themes.default.common.country')
                                            </select>
                                        </div>
                                        <div>
                                            <input class="uk-input" type="text" name="email" placeholder="Email *" required>
                                        </div>
                                        <div>
                                            <input class="uk-input" type="text" name="phone" placeholder="Phone(Landline)">
                                        </div>
                                    </div>
                                    <!--  -->
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Information -->
                </div>

                <!-- Special Requirement -->
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <div>
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend uk-text-theme uk-margin-bottom">Special Requirement</legend>

                                <!--  -->
                                <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                                    <div>
                                        <p>Please tell us more about yourself to help you better.</p>
                                        <textarea name="comments" class="uk-textarea" rows="4" placeholder="Write your message here"></textarea>
                                    </div>
                                </div>
                                <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top uk-margin-bottom" uk-grid>
                                    <div>

                                        <label><input class="uk-checkbox"  type="checkbox" name="terms_conditions" required> &nbsp;&nbsp; I accept <a>Terms and Conditions</a></label>

                                    </div>
                                </div>
                                <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-text-left uk-margin-remove-top  " uk-grid>
                                    <div>
                                        <!-- <a href="booking-success.php" class="uk-button uk-button-primary">Submit</a> -->
                                        <button type="submit" class="uk-button uk-button-primary g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('{{env("SITE_KEY")}}', {action: 'homepage'}).then(function(token) {
       document.getElementById('g_recaptcha_response').value=token;
    });
});
</script>
@stop