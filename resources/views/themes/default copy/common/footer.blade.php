<footer class="uk-light" id="footer">
	<div class="uk-footer">
		<div class="uk-block ">
			<div class="uk-container   ">
				<div class="  uk-child-width-expand@s" uk-grid uk-scrollspy="cls: uk-animation-fade; target:.uk-footer-box;  delay: 500;">
					<div class="uk-footer-box">
						<!--<h4>BackPackers </h4>-->
						<ul class="uk-list title-list">
							@if($about_us)
								@foreach($about_us as $item)
						    	<li><a href="{{ route('page.pagedetail', $item->uri) }}">{{$item->post_title}}</a></li>
								@endforeach
							@endif
							<div class="uk-margin-top">
								<h4>Follow Us</h4>
								<a href="@if($setting && $setting->facebook_link){{$setting->facebook_link}}@else # @endif" target="_blank" class="uk-icon-button uk-facebook" uk-icon="facebook"></a>
								<!--<a href="@if($setting && $setting->twitter_link){{$setting->twitter_link}}@else # @endif" target="_blank" class="uk-icon-button uk-twitter " uk-icon="twitter"></a>-->
								<a href="@if($setting && $setting->instagram_link){{$setting->instagram_link}}@else # @endif" target="_blank" class="uk-icon-button uk-instagram " uk-icon="instagram"></a>
								<!--<a href="@if($setting && $setting->youtube_link){{$setting->youtube_link}}@else # @endif" target="_blank" class="uk-icon-button uk-youtube " uk-icon="youtube"></a>-->
								<a href="@if($setting && $setting->tripadvisor_link){{$setting->tripadvisor_link}}@else # @endif" target="_blank" class="uk-icon-button uk-advisor " uk-icon="tripadvisor"></a>
							</div>
						</ul>
					</div>
					@if($expeditions->count()>0)
						<div class="uk-footer-box">
							<h4>Expeditions</h4>
							@if($expeditions->count()>0)
								<ul class="uk-list title-list">
									@foreach($expeditions as $row)
										@if(trip_byDestinations($row->id)->count()>0)
											<li><a href="{{ route('page.destinationlist', $row->uri) }}">{{$row->title}}</a></li>
										@endif
									@endforeach
								</ul>
							@endif
						</div>
					@endif
					@if($regions->count()>0)
						<div class="uk-footer-box">
							<h4>Trekking</h4>
							@if($regions->count()>0)
								<ul class="uk-list title-list">
									@foreach($regions as $row)
										@if (tripbyregions($row->id)->count() > 0)
											<li><a href="{{ route('page.regionlist', $row->uri) }}">{{$row->title}}</a></li>
										@endif
									@endforeach
								</ul>
							@endif
						</div>
					@endif
					@if($pagetypes->count()>0 || $contact_us)
						<div class="uk-footer-box">
							<h4>Quick Link</h4>
							<ul class="uk-list title-list">
								@if($pagetypes->count()>0)
									@foreach($pagetypes as $row)
										<li><a href="{{url('info/'.$row->uri)}}">{{$row->page_type}}</a></li>
									@endforeach
								@endif
								<li><a href="{{ route('page.posttype_detail', $contact_us->uri) }}">{{$contact_us->post_type}}</a></li>
							</ul>
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
	@if($setting && $setting->copyright_text)
		<div class="uk-tiny-footer">
			<div class="uk-container  uk-text-center    ">
				<a href="#" uk-totop uk-scroll class="uk-scroll-top" uk-scroll uk-scrollspy="cls: uk-animation-slide-bottom;  delay: 500;"></a>
				<div class="uk-text-center" uk-scrollspy="cls: uk-animation-fade;    delay: 500;">
					<div class="uk-text-white">{!!$setting->copyright_text!!}</div>
				</div>
			</div>
		</div>
	@endif
</footer>

<!-- end page_content-->
<div class="uk-clearfix">

</div>
</div>
<script src="{{asset('themes-assets/js/uikit-icons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes-assets/menu/js/stellarnav.min.js')}}"></script>
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/661ba02f1ec1082f04e21e9c/1hrdujf9r';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
// </script>
<script type="text/javascript">
// 	jQuery(document).ready(function($) {
// 		jQuery('.stellarnav').stellarNav({
// 			theme: 'dark',
// 			breakpoint: 1100,
// 			position: 'right',
// 			phoneBtn: '+977-1-5487474547',
// 			locationBtn: 'https://www.google.com/maps '
// 		});
// 	});
// </script>
<!-- required -->
<script src="{{asset('themes-assets/js/jquery-ui.js')}}"></script>
<script>
	$(document).ready(function() {
		$(".datepicker").datepicker({
			dateFormat: 'dd/mm/yy',
			changeMonth: true,
			numberOfMonths: 1,
			value: true,
		});
	})
</script>
<script>
	function goBack() {
		window.history.back();
	}
</script>
<script>
	UIkit.util.on('#js-animation-switcher', 'change', function() {
		var value = this.value;
		UIkit.util.$$('.js-slideshow-animation').forEach(function(slideshow) {
			UIkit.util.attr(slideshow, 'animation', value);
		});
	});
	UIkit.util.on('#js-finite-switcher', 'change', function() {
		var value = this.value;
		UIkit.util.$$('[uk-slideshow]').forEach(function(slideshow) {
			UIkit.util.attr(slideshow, 'finite', value);
		});
	});
</script>
<!-- book -->

</body>
</html>