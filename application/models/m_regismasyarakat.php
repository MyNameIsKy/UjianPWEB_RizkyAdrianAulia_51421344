<?php

    class M_regismasyarakat extends CI_Model{

        public function input_data($data){
            $this->db->insert('masyarakat', $data);
        }

    }


?>