<?php
$user_id= $this->session->userdata('user_id');
defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <div class='container'>
        <div class="row">
            <div class="col-sm-12">
                <h1>Printshop shopping cart</h1>
                
                <h2><?php echo $user_id . ' - ' . $title ?></h2>
                
                <div>
                    <?php echo 'You added item ' . $item ?>
                </div>
            </div>
        </div>
</div>