<div class="container-fluid col-md-10">
	<!-- tästä alkaa sivun kyltti -->
	<div class="row">
		<div class="mainos col-md-12">
			<img class="fit-image" src="<?php echo base_url(); ?>assets/images/kyltti2.jpg">
		</div>
	</div>	
	
	<div class="container-fluid bg-light marginsides">
		<div class="row">
			<div class="col-md-12 pad-top center text-center">
				<blockquote class="font-exo blockquote">
					<p class="mb-0">
						Sign in here, young padawan.
					</p>
				</blockquote>
			</div>
				
			<div class="col-md-3 center text-center">	
				<!-- rekisteröinti formi -->
  				    <div class="form-row text-center font-exo">
                  <div class="col-md-12">
                        <h2>Log in</h2>
                
                    <?php
                    $success_msg= $this->session->flashdata('success_msg');
                    $error_msg= $this->session->flashdata('error_msg');
  
                    if($success_msg){
                    ?>
                  <div class="alert alert-success">
                    <?php echo $success_msg; ?>
                  </div>
                  <?php
                    }
                    if($error_msg){
                  ?>
                  <div class="alert alert-danger">
                    <?php echo $error_msg; ?>
                  </div>
                    <?php
                    }
                    ?>
                 <!-- <div class="col-auto"> -->
                      <?php
                        echo form_open('user/login_user');
                      ?>
                  <div class="form-group">
                    <label for="sposti">Email</label>
                    <input type="email" class="form-control mb-2" name="sposti" id="sposti" placeholder="Enter your email">
                  </div>
                  
                  <div class="form-group">
                    <label for="salasana">Password</label>
                    <input type="password" class="form-control mb-2" name="salasana" id="salasana" placeholder="Enter your password">
                  </div>
  
                  <input class="btn btn-lg btn-dark btn-block" type="submit" value="Log in" name="login" >
                  <?php
                  echo form_close();
                  ?>
                  <b>No account yet?</b> <br></b><a href="<?php echo base_url('printshop/register/'); ?>">Register</a>
                </div>
            </div>
			  </div>
		</div>
	</div>
</div>
