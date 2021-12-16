<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

?>

<div class="container">
    <div>
        <div class="col-sm-12">
            <h1 class="text-center mt-5 mb-5">Welcome to DRIP, login to continue</h1>
        </div>
        <div class="col-sm-12">
            <div class="form-div m-5">
                <?php echo form_open('login/login_process'); ?>
                
                <div class="form-group mt-2">
                    <input type="text" name="username" placeholder="Username" class="form-control"  id="inpt"required>
                </div>
                <div class="form-group mt-2">
                    <input type="password" name="pass" placeholder="Password" class="form-control" id="inpt" required>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="log" class="btn btn-success form-control mb-2">
                    <a href="<?php echo site_url('login/registration'); ?>" class="btn btn-info form-control">Registration</a>
                </div>
            </div>
        </div>
    </div>
</div>