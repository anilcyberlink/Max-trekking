<div class="uk-width-1-3@m">
  <div class="uk-position-z-index" style="z-index: 1;" uk-sticky="offset: 130; bottom: !.uk-trips;media: 640;">
       <div class="uk-expedition-icons uk-text-center ">
           <p class="uk-margin-small">SHARE WITH FRIENDS</p>
           <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ced0a5282010c0012835c6a&product=inline-share-buttons' async='async'></script>
           <div class="sharethis-inline-share-buttons  " style="display:flex !important; justify-content:center;"></div>
            
        </div>
      <div class="uk-card uk-trip-price uk-padding">
        @if($data->starting_price)
            <!--<p class="price-rate uk-text-center"> <span class="fa fa-tag"></span>&nbsp;&nbsp;Price:&nbsp;&nbsp;<span class="currency">${{$data->starting_price}} </span></p>-->
        @endif
        <div class="uk-trip-button ">
            <a href="{{route('page.booking', $data->uri)}}" class="button bg-yellow ">Book this Trip<i class="fa fa-long-arrow-right"></i></a>
            <a uk-toggle="target: #modal-sections" type="button" class="button bg-yellow ">Enquiry Now<i class="fa fa-long-arrow-right"></i></a>
        </div>
        <hr>
        <div>
            @if($contact_us_post_info->content)
                <h3 class="uk-text-center">Need Help?</h3>
                <p class="uk-text-center">{!!$contact_us_post_info->content!!}</p>
            @else
                <h3 class="uk-text-center">Need Help?</h3>
                <p class="uk-text-center">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
            @endif
            @if($setting->phone)
                <h5 class="uk-margin-remove uk-text-center"><span class="fa fa-phone uk-margin-small-right uk-text-yellow "></span>{{$setting->phone}}</h5>
            @endif
            @if($setting->email_secondary)
                <h5 class="uk-margin-remove uk-text-center"><a href="mailto:dragonsherpa555@gmail.com" class="uk-text-white"><span class="fa fa-envelope-o uk-margin-small-right uk-text-yellow"></span>{{$setting->email_secondary}}</h5></a>  
            @endif
        </div>
      </div>
  </div>
</div>

<!-- Inquiry -->
@if(!empty($data))
	<div id="modal-sections" uk-modal>
		<div class="uk-modal-dialog uk-modal-body">
			<form action="{{ route('post-inquiry') }}" method="POST">
				<button class="uk-modal-close-default" type="button" uk-close></button>
				<div class="uk-modal-body">
					<div class="uk-grid-small" uk-grid>
						@csrf
						<input type="hidden" id="g_recaptcha_response" name="g-captcha-response" />
						<input type="hidden" name="trip_id" value="{{$data->id}}">
						<input type="hidden" name="title" value="{{$data->trip_title}}">
						<div class="uk-width-1-2@s">
							<label>Full Name <span class="text-red">*</span></label>
							<input class="uk-input" name="name" type="text" placeholder="" required>
						</div>
						<div class="uk-width-1-2@s">
							<label>Email <span class="text-red">*</span></label>
							<input class="uk-input" type="email" name="email" placeholder="" required>
						</div>
						<div class="uk-width-1-2@s">
							<label>Contact No. <span class="text-red">*</span></label>
							<input class="uk-input" name="number" type="number" placeholder="" required>
						</div>
						<div class="uk-width-1-2@s">
							<label>Select Country</label>
							<select name="country" class="uk-input">
								@include('themes.default.common.country')
							</select>

						</div>
						<div class="uk-width-1-2@s">
							<label>No. of Persons</label>
							<input class="uk-input" type="number" name="group_size" placeholder="">
						</div>
						<div class="uk-width-1-2@s">
							<label>Duration Of Stay (Days)</label>
							<input class="uk-input" type="number" name="duration" placeholder="">
						</div>
						<div class="uk-width-1-2@s">
							<label>Planned Arrival Date</label>
							<input class="uk-input" type="date" name="trip_start_date" placeholder="">
						</div>
						<div class="uk-width-1-1@s">
							<label>Additional Requirements</label>
							<textarea name="review" class="uk-textarea" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="uk-modal-body">
					<p>Note : : <span class="text-red">'*' field should be filled.</span></p>
				</div>
				<div class="uk-modal-footer uk-text-right">
					<button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
					<button class="uk-button uk-button-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@endif
<!-- inquiry -->
<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('{{env("SITE_KEY")}}', {action: 'homepage'}).then(function(token) {
       document.getElementById('g_recaptcha_response').value=token;
    });
});
</script>