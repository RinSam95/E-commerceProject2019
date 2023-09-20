  <div class="container">
  <br>
  <br>
  <br>
      <div class="form-row align-items-center">
          <div class="col-auto">
                 <div class="col-auto">
                      <h3>New customer</h3>
                  </div>
                  <div class="col-auto">
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
                      <?php
                      echo form_open('user/register_user');
                      ?>
                              <div class="form-group">
                                  <label for="tunnus">Username</label>
                                  <input type="text" class="form-control mb-2" name="tunnus" id="tunnus" placeholder="Enter your username">
                              </div>
                              <div class="form-group">
                                  <label for="sposti">Email</label>
                                  <input type="email" class="form-control mb-2" name="sposti" id="sposti" placeholder="Enter your email address">
                              </div>
                              <div class="form-group">
                                <label for="salasana">Password</label>
                                <input type="password" class="form-control mb-2" name="salasana" id="salasana" placeholder="Enter your password">
                              </div>
                              
                               <div class="form-group">
                                 <label for="asnimi">Full name</label>
                                 <input type="text" class="form-control mb-2" name="asnimi" id="asnimi" placeholder="Enter your full name">
                              </div>
                              
                              <div class="form-group">
                                  <label for="osoite">Address</label>
                                  <input type="text" class="form-control mb-2" name="osoite" id="osoite" placeholder="Enter your home address">
                              </div>
                              
                              <div class="form-group">
                                  <label for="postitmp">Post office</label>
                                  <input type="text" class="form-control mb-2" name="postitmp" id="postitmp" placeholder="Enter your post office">
                              </div>
                              
                              <div class="form-group">
                                  <label for="postinro">ZIP code</label>
                                  <input type="text" class="form-control mb-2" name="postinro" id="postinro" placeholder="Enter your ZIP code">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Sign up" name="register" >
                      <?php
                      echo form_close();
                      ?>
                      <center><b>Already have an account?</b> <br></b><a href="<?php echo base_url('login_view'); ?>">Sign in here</a></center>
                </div>
          </div>
      </div>
  </div>

