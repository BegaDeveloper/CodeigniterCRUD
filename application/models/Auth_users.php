<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Auth_users extends CI_Model {
    public function auth_user($data){
        $this->db->insert('auth', $data);
    }
}