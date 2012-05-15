
 <div id="example">
			<div id="slides">
				<div class="slides_container">
					<a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-1.jpg" width="570" height="270" alt="Slide 1"></a>
					<a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="Taxi | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
					<a href="http://www.flickr.com/photos/childofwar/2984345060/" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
					<a href="http://www.flickr.com/photos/b-tal/117037943/" title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
					<a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="“I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.” | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
					<a href="http://www.flickr.com/photos/streetpreacher/2078765853/" title="twelve.inch | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-6.jpg" width="570" height="270" alt="Slide 6"></a>
					<a href="http://www.flickr.com/photos/aftab/3152515428/" title="Save my love for loneliness | Flickr - Photo Sharing!" target="_blank"><img src="images/slides_standard/slide-7.jpg" width="570" height="270" alt="Slide 7"></a>
				</div>
				<a href="#" class="prev"><img src="images/slides_standard/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="images/slides_standard/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
			<img src="images/slides_standard/example-frame.png" width="739" height="341" alt="Example Frame" id="frame" />
 </div>
<script>
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 5000,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					window.location.hash = '#' + current;
				}
			});
		});
</script>