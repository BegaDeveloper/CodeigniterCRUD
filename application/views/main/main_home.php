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
    <title>Home</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    #header {
        margin-left: 150px;
    }

    #list {
        margin: 0 150px 0 auto;
    }
    </style>
</head>

<body>
    <!---Nav--->
    <?php $this->load->view('main/inc/nav'); ?>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Table of emploees</h1>
        <hr>
        <table class="table table-striped table-dark mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Current position</th>
                    <th scope="col">Previous position</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                $res_list = $this->db->get('resume');
                foreach($res_list->result() as $res){

                
                ?>
                <tr>
                    <th scope="row"><?php echo $res->id ?></th>
                    <td><?php echo $res->f_name ?></td>
                    <td><?php echo $res->l_name ?></td>
                    <td><?php echo $res->position ?></td>
                    <td><?php echo $res->last_position ?></td>
                    <td><a href="<?php echo site_url(); ?>resume_con/updateThis/<?php echo $res->id; ?>" class="btn btn-warning form-control">Edit</a></td>
                    <td><a href="<?php echo site_url(); ?>resume_con/deleteThis/<?php echo $res->id; ?>" class="btn btn-danger form-control">Delete</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <!--Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>