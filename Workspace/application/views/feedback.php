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
							 <a class="nav-link" href="#">FEEDBACK</a>
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
					FEEDBACK
				</h2>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="span6">
            <form>
                <div class="controls controls-row">
                    <input id="name" name="name" type="text" class="span3" placeholder="Name"> 
                    <input id="email" name="email" type="email" class="span3" placeholder="Email address">
                </div>
                <div class="controls">
                    <textarea id="message" name="message" class="span6" placeholder="Your Message" rows="5"></textarea>
                </div>
                  
                <div class="controls">
                    <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
                </div>
            </form>
        </div>
	</div>
</div>
	
	

</div>