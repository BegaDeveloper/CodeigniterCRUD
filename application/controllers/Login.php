<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

    //Auth_users MODEL
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_users');
    }
    
    //Default view load
    public function index(){
        $this->load->view('inc/header');
        $this->load->view('login');
        $this->load->view('inc/footer');
    }

    //Registration page
    public function registration(){
        $this->load->view('registration');
    }

    //Registration form
    public function registration_process(){
        if($this->input->post('reg')){
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $username = $this->input->post('username');
            $e_mail = $this->input->post('e_mail');
            $pass = md5($this->input->post('pass'));

            $data_auth = array (
                'f_name' => $f_name,
                'l_name' => $l_name,
                'username' => $username,
                'e_mail' => $e_mail,
                'pass' => $pass
            );

            $this->Auth_users->auth_user($data_auth);
            redirect('login', 'refresh');
        } else {
            redirect('registration', 'refresh');
        }
    }

    //Login form
    public function login_process(){
        if($this->input->post('log')){
            $username = $this->input->post('username');
            $pass = md5($this->input->post('pass'));

            $login_data = array (
                'username' => $username,
                'pass' => $pass
            );

            $check = $this->db->get_where('auth', array('username' => $login_data['username']));
            foreach($check->result() as $user){
                if($login_data['username'] == $user->username && $login_data['pass'] == $user->pass ){
                    $_SESSION['username'] = $login_data['username'];
                    redirect('main', 'refresh');
                } else {
                    echo "<script>alert ('Username or password incorect')</script>";
                    redirect('login', 'refresh');
                }
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    //Loggout
    public function logout(){
        session_unset();
        session_destroy();
        redirect('login', 'refresh');
    }

}