<?php 


    class Registrasi_masyarakat extends CI_Controller{

        public function index(){
            // $data['masyarakat'] = $this->m_regismasyarakat->tampil_data()->result();
            $this->load->view('registrasi_masyarakat');
            
        }

        public function tambah_aksi(){


            $nik            = $this->input->post('nik');
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $password       = $this->input->post('password');
            $telp           = $this->input->post('telp');
            


            $data = array(
                'nik'           => $nik,
                'nama'          => $nama,
                'username'      => $username,
                'password'      => $password,
                'telp'          => $telp
            );

            $this->m_regismasyarakat->input_data($data, 'masyarakat');
            redirect('login');

        }
        



    }




?>