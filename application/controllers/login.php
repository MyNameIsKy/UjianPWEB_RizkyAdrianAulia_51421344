<?php

    class login extends CI_Controller{

        public function index(){
            $this->load->view('login_v');
        }

        public function proses_login(){

            $this->form_validation->set_rules('username','username','required',['required'=>'Username belum diisi']);
            $this->form_validation->set_rules('password','password','required',['required'=>'Password belum diisi']);

            if($this->form_validation->run() == FALSE){
                $this->load->view('login_v');
            }else{

                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //Mengambil value inputan yang ada di view dan ditampung ke dalam variabel

                $cek = $this->login_m->cek_login($username, $password);
                $pgn = $this->login_m->cek_admin($username, $password);
 
                if($cek->num_rows() > 0){

                    foreach ($cek->result() as $ck){
                        $sess_data['username'] = $ck->username;
                        $sess_data['password'] = $ck->password;
                        $sess_data['nama'] = $ck->nama;
                        $sess_data['nik']  = $ck->nik;
                        $sess_data['level'] = $ck->level;

                        $this->session->set_userdata($sess_data);
                    }

                    // if($sess_data['level'] == "admin" ){
                    //     redirect('admin/dashboard');
                    // }else if($sess_data['level'] == "user"){
                    //     redirect('pengaduan/index');
                    // }else{
                    //     redirect('login');
                    // }

                    redirect('sis_penmas/dashboard');

                }else if($pgn->num_rows() > 0){

                    foreach ($pgn->result() as $pn){
                        $sess_data['username'] = $pn->username;
                        $sess_data['password'] = $pn->password;
                        $sess_data['nama_petugas'] = $pn->nama;
                        $sess_data['id_petugas'] = $pn->id_petugas;
                        $sess_data['level'] = $pn->level;

                        $this->session->set_userdata($sess_data);
                    }

                    if($sess_data['level'] == "admin" ){
                        redirect('sis_penmas/dashboard');
                    }else if($sess_data['level'] == "user"){
                        redirect('sis_penmas/dashboard');
                    }else{
                        redirect('sis_penmas/dashboard');
                    }

                    redirect('sis_penmas/dashboard');
                
                }else{
                    redirect('login');
                }

            }

        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }


    }

?>