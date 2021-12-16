<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

if(!$_SESSION['username']){
    redirect('login', 'refresh');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add section</title>
    <style>
        #header{
            margin-left: 150px;
        }

        #list{
            margin: 0 150px 0 auto;
        }

        .main-form{
            width: 500px;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }
    </style>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--Nav-->
    <?php $this->load->view('main/inc/nav'); ?>
    <!----->
    <h1 class="text-center mt-5">Fill the form</h1>
    <div class="container">
        <div class="main-form">
            <?php echo form_open('resume_con/fill_form'); ?>
            <div class="form-group mb-2">
                <input type="text" name="f_name" class="form-control" placeholder="First name" required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="l_name" class="form-control" placeholder="Last name" required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="position" class="form-control" placeholder="Current position" required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="last_position" class="form-control" placeholder="Last position" required>
            </div>
            <div class="form-group mb-2">
                <input type="submit" name="sub" class="form-control btn btn-info" value="Add" >
            </div>
        </div>
    </div>
    <!--Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>