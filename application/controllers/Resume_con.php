<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Resume_con extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resume');
    }


    public function add_emp(){
        $this->load->view('main/add_employee');
    }

    //
    public function fill_form(){
        if($this->input->post('sub')){
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $position = $this->input->post('position');
            $last_position = $this->input->post('last_position');

            $form_data = array (
                 'f_name' => $f_name,
                 'l_name' => $l_name,
                 'position' => $position,
                 'last_position' => $last_position
            );

            $this->Resume->add_resume($form_data);
            redirect('main', 'refresh');
        } else {
            echo "Somethings not working...";
        }
    }

    //Delete user button
    public function deleteThis($id){
        $this->db->where('id', $id);
        $this->db->delete('resume');
        redirect('main', 'refresh');

    }

    //Update user button
    public function updateThis($id){
        $this->load->view('main/update_this', $id);
    }

    public function update_form($id){
        if($this->input->post('update')){
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $position = $this->input->post('position');
            $last_position = $this->input->post('last_position');

            $upt_details = array (
                 'f_name' => $f_name,
                 'l_name' => $l_name,
                 'position' => $position,
                 'last_position' => $last_position
            );

            $this->db->where('id', $id);
            $this->db->update('resume', $upt_details);
            redirect('/main', 'refresh');
        }
    }



}