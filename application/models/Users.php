<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    // Get data user
    public function getUsers()
    {
        $this->db->from('tb_user');
        $this->db->select('id_user,username,name,role');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get data user by id
    public function getUsersById($id)
    {
        $this->db->from('tb_user');
        $this->db->select('id_user,username,name,role');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Function Delete users
    public function deleteUsers($id)
    {
        $this->db->from('tb_user');
        $this->db->where('id_user', $id);
        $this->db->delete();
        if ($this->db->affected_rows() > 0) {
            return True;
        } else {
            return False;
        }
    }

    // Function login
    public function login($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);

        $query = $this->db->get('tb_user');

        if ($this->db->affected_rows() == 1) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Function register users
    public function register($data)
    {
        $this->db->insert('tb_user', $data);
        if ($this->db->affected_rows() > 0) {
            return True;
        } else {
            return False;
        }
    }
}