<br>
<br>
<br>

<div class="container">
  <div class="panel panel-default">
   <div class="panel-heading"><h3>Syötä tietosi:</h3></div>
   <br>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>index.php/register/validation">
     
     <div class="form-group">
      <label>Käyttäjätunnus</label>
      <input type="text" name="acc_id" class="form-control" placeholder="Kirjoita käyttäjätunnus" value="<?php echo set_value('acc_id'); ?>" />
      <span class="text-danger"><?php echo form_error('acc_id'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Salasana</label>
      <input type="password" name="user_password" class="form-control" placeholder="Valitse salasanasi" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Sähköposti</label>
      <input type="text" name="user_email" class="form-control" placeholder="Kirjoita sähköpostiosoitteesi" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Nimi</label>
      <input type="text" name="name" class="form-control" placeholder="Kirjoita nimesi" value="<?php echo set_value('name'); ?>" />
      <span class="text-danger"><?php echo form_error('name'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Osoite</label>
      <input type="text" name="address" class="form-control" placeholder="Kirjoita kotiosoitteesi" value="<?php echo set_value('address'); ?>" />
      <span class="text-danger"><?php echo form_error('address'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Postitoimipaikka</label>
      <input type="text" name="post_office" class="form-control" placeholder="Kirjoita postitoimipaikkasi" value="<?php echo set_value('post_office'); ?>" />
      <span class="text-danger"><?php echo form_error('post_office'); ?></span>
     </div>
     
     <div class="form-group">
      <label>Postinumero</label>
      <input type="text" name="postal_code" class="form-control" placeholder="Kirjoita postinumerosi" value="<?php echo set_value('postal_code'); ?>" />
      <span class="text-danger"><?php echo form_error('postal_code'); ?></span>
     </div>
     
     
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-dark" />
     </div>
    </form>
   </div>
  </div>
 </div>