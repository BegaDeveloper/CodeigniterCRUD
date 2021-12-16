<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

if(!$_SESSION['username']){
    redirect('login', 'refresh');
}
$id = $this->uri->segment(3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update section</title>
    <style>
    #header {
        margin-left: 150px;
    }

    #list {
        margin: 0 150px 0 auto;
    }

    .main-form {
        width: 500px;
    }

    .container {
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
    <h1 class="text-center mt-5">Update details</h1>
    <div class="container">
        <div class="main-form">
            <?php echo form_open('resume_con/update_form/'.$id, 'class="form-horizontal" '); ?>
            <?php 
            
            $update_list = $this->db->get_where('resume', array ('id' => $id ));

            foreach($update_list->result() as $upt){
                ?>
            <div class="form-group mb-2">
                <input type="text" name="f_name" class="form-control" value="<?php echo $upt->f_name; ?>"  placeholder="New first name " required> 
            </div>
            <div class="form-group mb-2">
                <input type="text" name="l_name" class="form-control" value="<?php echo $upt->l_name; ?>"  placeholder="New last name "  required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="position" class="form-control"value="<?php echo $upt->position; ?>"  placeholder="New position"  required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="last_position" class="form-control" value="<?php echo $upt->last_position; ?>"  placeholder="Last position "  required>
            </div>
            <div class="form-group mb-2">
                <input type="submit" name="update" class="form-control btn btn-warning"  value="Update">
            </div>

            <?php
            } ?>
        </div>
    </div>
    <!--Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>