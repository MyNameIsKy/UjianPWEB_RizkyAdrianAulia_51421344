<?php

    class Login_m extends CI_Model{

        public function cek_login($username, $password){
            $this->db->where("username", $username);
            $this->db->where("password", $password);
            return $this->db->get('masyarakat');
        }

        public function cek_admin($username, $password){
            $this->db->where("username", $username);
            $this->db->where("password", $password);
            return $this->db->get('petugas');
        }

    }



?>