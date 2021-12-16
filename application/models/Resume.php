<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Resume extends CI_Model {
    public function add_resume($details){
        $this->db->insert('resume', $details);
    }
}