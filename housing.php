<?php 
$page_title = 'Riverview Sober House - Sober Living in New Haven, CT - Sober House';
include_once("./includes/header.php") 
?>
	

<section class="housing_page">
	<div class="container well" style="background-color: black; color: #7c7b7b; border: none;">
	<h2 style="text-align: center; margin-bottom: 0">Riverview Sober House - housing</h2>

		<div id="links">
			<a href="images/house_7.jpg" title="">
			</a>
			<a href="images/house_8.jpg" title="">
			</a>
			<a href="images/house_9.jpg" title="">
			</a>
			<a href="images/house_10.jpg" title="">
			</a>
			<a href="images/house_11.jpg" title="">
			</a>
			<a href="images/house_12.jpg" title="">
			</a>
			<a href="images/house_13.jpg" title="">
			</a>
			<a href="images/house_14.jpg" title="">
			</a>
		</div>
 
		<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
		<div class="text-center">tap for controls or swipe with finger</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h3>Our Amenities Include:</h3>
				<ul>
					<li>Large living room with a flat screen TV and attractive water views through oversized windows.</li>
					<li>Beautiful, newly renovated kitchen with granite counter tops.</li> 
					<li>Two refrigerators, two ovens a dishwasher and microwave.</li>
					<li>Two man bedrooms with walk-in closets, flat screen TV's, new furnishings and central air and heat.</li>
					<li>Common areas include:</li>
					<ul class="nested_indent">
						<li>Computer workstation with laser printer.</li> 
						<li>Large sun deck with outdoor furniture.</li>
						<li>Gas grill and beautifully landscaped back yard.</li>
					</ul>
					<li>All residents have access to:</li>
					<ul class="nested_indent">
						<li>New front-loading washer and dryer.</li>
						<li>Free HD cable.</li>
						<li>High speed wireless internet &amp; phone service.</li>
					</ul>
				</ul>
			</div>
		</div> 
	</div>
</section>

 <div class="section well">
    <div class="container">
   	  <div class="row">
		<div class="col-lg-4 col-md-4">
			<img src="./images/house_4.jpg" alt="..." width="100%" />
        </div>
		
	  	<div class="col-lg-4 col-md-4">
		  <h4 class="text-center" style="padding-top: 10%;">GET IN TOUCH</h4>
         <br>
          <address class="text-center" style="padding-bottom: 10%">
			  <h5><strong>Riverview Sober House</strong></h5>
			  <span style="font-size: 11px;"><em>QUALITY SOBER HOUSING</em></span><br>
			  New Haven, CT 06513<br>
			  203-888-1234<br>
			  contact@riverviewsoberhouse.com
		  </address>
		</div>
		
		<div class="col-lg-4 col-md-4">
			<img src="./images/house_5.jpg" alt="..." width="100%" />
		</div>
	  </div>
    </div>
  </div>
  
<script src="js/blueimp-gallery.min.js"></script>
<script>
blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);
</script>

	
<?php include_once("./includes/footer.php") ?>