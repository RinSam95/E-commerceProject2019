<?php
$user_id= $this->session->userdata('user_id');

if(!$user_id){

 // redirect('user/login_view');
}

 ?>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
          <tr>
          <th colspan="2"><h4 class="text-center">User Details</h3></th>
          </tr>
        </thead>
        
		<?php foreach($users as $key => $val){ ?>
          <tr>
            <td>User name</td>
            <td><?php echo $val['tunnus']; /*$this->session->userdata('user_name');*/ ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $val['sposti']; /*$this->session->userdata('user_email');*/ ?></td>
          </tr>
          <tr>
            <td>Full name</td>
            <td><?php echo $val['asnimi']; /*$this->session->userdata('user_email');*/ ?></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><?php echo $val['osoite']; /*$this->session->userdata('user_email');*/ ?></td>
          </tr>
          
		  <?php } ?>
		  
		  	<?php foreach($posti as $key => $val){ ?>
		  	  <tr>
            <td>Post office</td>
            <td><?php echo $val['postitmp']; /*$this->session->userdata('user_email');*/ ?></td>
          </tr>
          <tr>
            <td>ZIP code</td>
            <td><?php echo $val['postinro']; /*$this->session->userdata('user_email');*/ ?></td>
          </tr>
		  	<?php } ?>
      </table>
    </div>
  </div>
    <a href="<?php echo 'user_logout';?>" >  <button type="button" class="btn btn-lg btn-danger">Logout</button></a>
</div>