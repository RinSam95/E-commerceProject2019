<div class="container-fluid col-md-10">
	<!-- tästä alkaa sivun kyltti -->
	<div class="row">
		<div class="mainos col-md-12">
			<img class="fit-image" src="../../../assets/images/kyltti2.jpg">
		</div>
	</div>	
	
	<!-- tästä alkaa ALEMPI navbar -->
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-white container-fluid marginsides">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav center font-exo bigger-font">
						<li class="nav-item">
							 <a class="nav-link" href="<?php echo base_url(); ?>">HOME</a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="<?php print site_url("printshop/tuotteet/"); ?>">SHOP ALL PRINTS<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="<?php print site_url("printshop/palaute/"); ?>">BROWSE CATEGORIES</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="<?php print site_url("printshop/palaute/"); ?>">FEEDBACK</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	<div class="container-fluid bg-light marginsides">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="pad-top font-exo bigger-font">
					ALL PRINTS
				</h2>
			</div>
		</div>
	</div>
<style>
/*

Styles for animated modal
=========================

*/

/* Start state */
.animated-modal {
    max-width: 550px;
    border-radius: 4px;
    overflow: hidden;
    background: linear-gradient(45deg, #543093 32%, #d960ae 100%);

    transform: translateY(-80px);
    transition: all .5s; /* Should match `data-animation-duration` parameter */
}

.animated-modal * {
    color: #fff;
}

.animated-modal h2,
.animated-modal p {
    transform: translateY(-40px);
    opacity: 0;

    transition-property: transform, opacity;
    transition-duration: .3s;
}

/* Final state */
.fancybox-slide--current .animated-modal,
.fancybox-slide--current .animated-modal h2,
.fancybox-slide--current .animated-modal p {
    transform: translateY(0);
    opacity: 1;

    transition-duration: .3s;
}

/* Reveal content with different delays */
.fancybox-slide--current .animated-modal h2 {
    transition-delay: .1s;
}

.fancybox-slide--current .animated-modal p {
    transition-delay: .4s;
}

.fancybox-slide--current .animated-modal p:first-of-type {
    transition-delay: .2s;
}

</style>
	
	<div class="container-fluid marginsides">
		<div class="row">
			<div class="col-md-12 bg-light">
				<div class="row">
					<!-- EKA RIVI -->
					<div class="col-md-3 category container">
						<div class="center-button">
							<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming1.jpg" />
							<p class="mb-0 btn">
				                <a data-fancybox data-src="#trueModal1" data-modal="true" href="javascript:;" class="btn btn-dark">SHOP</a>
				            </p>
			            </div>
					</div>
					<div id="trueModal1" class="p-5 text-center font-exo" style="display: none;max-width:600px;">
						<div style="text-align: right;">
				            <i data-fancybox-close class="fas fa-times"></i>
				        </div>
				        <h2>
				            Fallout 3: Liberty Prime
				        </h2>
				        <p>
				            <i>"Death is a preferable alternative to communism."<br>~Liberty Prime</i>
				        </p>
				        <p>
				            Say hello to Liberty Prime, everyone's favorite giant patriot. Prime is a formidable combat robot that is currently in the possession of the Brotherhood of Steel.
				            Its original intent was to liberate Anchorage, Alaska, from the Red Chinese during the Sino-American War of 2072. In this print made by <i>Some Guy</i> we can
				            see Liberty Prime getting redy to throw a nuke at his enemies.
				        </p>
						<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming1.jpg" />
				    </div>
				    
				    
				    
					<div class="col-md-3 category font-exo">
						<div class="center-button">
						<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming2.jpg" />
						<p class="mb-0 btn">
				        	<a data-fancybox data-src="#trueModal2" data-modal="true" href="javascript:;" class="btn btn-dark">SHOP</a>
				        </p>
				        </div>
					</div>
					<div id="trueModal2" class="p-5 text-center font-exo" style="display: none;max-width:600px;">
						<div style="text-align: right;">
				            <i data-fancybox-close class="fas fa-times"></i>
				        </div>
				        <h2>
				            Portrait of Geralt
				        </h2>
				        <p>
				            This magnificent portrait of Geralt from The Witcher 3: Wild Hunt comes from the game's massive, critically acclaimed DLC Blood and Wine. One of the quests
				            offers the player the chance to get Geralt's portrait painted by a faitfhul artist.
				        </p>
						<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming2.jpg" />
				    </div>
					<div class="col-md-3 category font-exo">
						<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming3.jpg" />
					</div>
					<div class="col-md-3 category font-exo">
						<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kategoriat/gaming/gaming4.jpg" />
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>