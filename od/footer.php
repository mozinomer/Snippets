<footer>
	<div class="container">
		<div class="row dis-flex main-row-top-footer">
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons1">sales@outsourcedesigning.com </span>
			</div>
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons2">14 Wall Street, 20th floor Manhattan, New York, 10005 </span>
			</div>
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons3">Phone: 1-800-664-1945</span>
			</div>
		</div>
	</div>
	<div class="row container footer_bottom">
		<div class="col-md-6">
			<a href="" class="img_1">
				<i class='fab fa-facebook-f'></i>
			</a>
			<a href="" class="img_2">
				<img class="img2" src="<?php echo get_template_directory_uri(); ?>/images/footer/2.jpg">
			</a>
			<a href="" class="img_3">
				<img class="img3" src="<?php echo get_template_directory_uri(); ?>/images/footer/3.jpg">
			</a>
			<a href="" class="img_4">
				<img class="img4" src="<?php echo get_template_directory_uri(); ?>/images/footer/4.jpg">
			</a>
			<a href="" class="img_5">
				<img class="img5" src="<?php echo get_template_directory_uri(); ?>/images/footer/5.jpg">
			</a>
			<a href="" class="img_6">
				<img class="img6" src="<?php echo get_template_directory_uri(); ?>/images/footer/6.jpg">
			</a>
			<a href="" class="img_7">
				<img class="img7" src="<?php echo get_template_directory_uri(); ?>/images/footer/7.jpg">
			</a>
			<a href="" class="img_8">
				<img class="img8" src="<?php echo get_template_directory_uri(); ?>/images/footer/8.jpg">
			</a>
		</div>
		<div class="col-md-6">
			<ul class="dis-flex list_footer_middle">
				<li>terms of services</li>
				<li>private policy</li>
				<li>information</li>
			</ul>
		</div>
	</div>
	<div class="row container footer_bottom_bottom">
		<span class="footer_logo">&copy; 2019. All right reserved</span>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
jQuery(document).ready( function() 
{

	$(".img_1").mouseover(function() {
		$( '.img_1 .img1' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/1_1.jpg");
	});
	$(".img_1").mouseout(function() {
		$( '.img_1 .img1' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/1.jpg");
	});


	$(".img_2").mouseover(function() {
		$( '.img_2 .img2' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/2_2.jpg");
	});
	$(".img_2").mouseout(function() {
		$( '.img_2 .img2' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/2.jpg");
	});


	$(".img_3").mouseover(function() {
		$( '.img_3 .img3' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/3_3.jpg");
	});
	$(".img_3").mouseout(function() {
		$( '.img_3 .img3' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/3.jpg");
	});


	$(".img_4").mouseover(function() {
		$( '.img_4 .img4' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/4_4.jpg");
	});
	$(".img_4").mouseout(function() {
		$( '.img_4 .img4' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/4.jpg");
	});


	$(".img_5").mouseover(function() {
		$( '.img_5 .img5' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/5_5.jpg");
	});
	$(".img_5").mouseout(function() {
		$( '.img_5 .img5' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/5.jpg");
	});


	$(".img_6").mouseover(function() {
		$( '.img_6 .img6' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/6_6.jpg");
	});
	$(".img_6").mouseout(function() {
		$( '.img_6 .img6' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/6.jpg");
	});


	$(".img_7").mouseover(function() {
		$( '.img_7 .img7' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/7_7.jpg");
	});
	$(".img_7").mouseout(function() {
		$( '.img_7 .img7' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/7.jpg");
	});


	$(".img_8").mouseover(function() {
		$( '.img_8 .img8' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/8_8.jpg");
	});
	$(".img_8").mouseout(function() {
		$( '.img_8 .img8' ).attr("src","<?php echo get_template_directory_uri(); ?>/images/footer/8.jpg");
	});






















	jQuery('.logo-img-container').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".sub-menu-lgo-container" ).slideToggle();

	});
	jQuery('.request_a_quote a').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".form_quote_req" ).css({'display': 'flex'});
	  	jQuery( ".form_quote_req" ).css({'align-item': 'center'});

  	});
	jQuery('.cross_icon_req_form').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".form_quote_req" ).css({'display': 'none'});

  	});
  	
		jQuery('.heading_form span').click( function(e) {
		e.preventDefault();
		jQuery('.modal_pop_up').css({'display':'none'});
		jQuery('body').css({'overflow':'scroll'});
		jQuery('body').css({'overflow-x':'hidden'});
	});
	jQuery('.list_icon_row').click( function(e) {
		e.preventDefault();
		jQuery('.gird_view_work').fadeOut("slow");
		jQuery('.list_view_works').fadeIn("slow");
	});
	jQuery('.grid_icon_row').click( function(e) {
		e.preventDefault();
		jQuery('.gird_view_work').fadeIn("fast");
		jQuery('.list_view_works').fadeOut("slow");
	});
	var out = 1;
	jQuery('.proposal_but').click( function(e) {
		if(out){
			$( ".modal_pop_up" ).animate({
			    width: "toggle"
			  }, 5000, function() {
			    // Animation complete.
		    });
			return out;
	}
	else
	{
		jQuery('.modal_pop_up').css({'display':'none'});
		jQuery('body').css({'overflow':'scroll'});
		jQuery('body').css({'overflow-x':'hidden'});
		out = 1;
		return out;
	}
	});
});
$('.carousel').carousel();
$('.corousal_2').carousel();
$('.corousal_3').carousel();

(function(){
  var words = [
      'Chef',
      'Designer',
      'Driver',
      'Developer',
      'Poet',
      'Teacher',
      'Happy Person'
      ], i = 0;
  setInterval(function(){
      jQuery('#changingword').fadeIn(function(){
          jQuery(this).html(words[i=(i+1)%words.length]).css({'display':'block'});
      });
  }, 380);
    
})();



</script>
<script>
  AOS.init();
</script>

<script type="text/javascript">
	// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
</body>
</html>
<?php wp_footer();?>