<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
         #inpt{
             width: 420px;
         }

         .container{
             display: flex;
             justify-content: center;
             align-items: center;
         }

         .form-div{
              padding: 50px;
              -moz-box-shadow: 0 0 4px #ccc;
              -webkit-box-shadow: 0 0 4px #ccc;
               box-shadow: 0 0 4px #ccc; 
               border-radius: 20px;
         }
     </style>
</head>
<body>
<div class="container">
    <div>
        <div class="col-sm-12">
            <h1 class="text-center mt-5 mb-5">Please register</h1>
        </div>
        <div class="col-sm-12">
            <div class="form-div m-5">
                <?php echo form_open('login/registration_process'); ?>
                <div class="form-group">
                    <input type="text" name="f_name" placeholder="First name " class="form-control" id="inpt" required>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="l_name" placeholder="Last name " class="form-control" id="inpt" required>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="username" placeholder="Username" class="form-control"  id="inpt"required>
                </div>
                <div class="form-group mt-2">
                    <input type="email" name="e_mail" placeholder="Email" class="form-control" id="inpt" required>
                </div>
                <div class="form-group mt-2">
                    <input type="password" name="pass" placeholder="Password" class="form-control" id="inpt" required>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="reg" class="btn btn-success form-control mb-2">
                    <a href="<?php echo site_url('login'); ?>" class="btn btn-info form-control">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>

