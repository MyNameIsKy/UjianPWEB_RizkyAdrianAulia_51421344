<?php



        class Tanggapan extends CI_Controller{

            public function index(){
    
                $data['tanggapan'] = $this->m_tanggapan->tampil_data()->result();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('tanggapan', $data);
                $this->load->view('templates/footer');   
            }

            public function tambah_aksi(){

                $id_pengaduan         = $this->input->post('id_pengaduan');
                $tgl_tanggapan        = $this->input->post('tgl_tanggapan');
                $tanggapan            = $this->input->post('tanggapan');
                // $id_petugas            = $this->input->post('id_petugas');
    
                $data = array(
                    'id_pengaduan'               => $id_pengaduan,
                    'tgl_tanggapan'              => $tgl_tanggapan,
                    'tanggapan'                  => $tanggapan,
                    'id_petugas'                 => $this->session->userdata('id_petugas')
                );
    
                $this->m_tanggapan->input_data($data, 'tanggapan');
                redirect('tanggapan/index');
    
            }
    
                
            public function hapus($id){
                
                $where = array ('id_tanggapan' => $id);
                $this->m_pengaduan->hapus_data($where, 'tanggapan');
                redirect('tanggapan');
    
            }
    
            public function edit($id_pengaduan){
    
                $where = array('id_pengaduan'=>$id_pengaduan);
                $data['pengaduan'] = $this->m_tanggapan->edit_data($where, 'pengaduan')->result();
    
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('edit_tanggapan', $data);
                $this->load->view('templates/footer');   
    
            }
    
            public function update(){
    
                $tanggapan                   = $this->input->post('tanggapan');
                $status                      = $this->input->post('status');
    
                $data = array(
                    'tanggapan'              => $tanggapan,
                    'status'                 => $status
                    
                );
    
                $where = array(
                    'id_tanggapan' => $id
                );
    
                $this->m_pengaduan->update_data($where,$data,'tanggapan');
                redirect('tanggapan/index');
    
            }
    
            // public function detail($id){
            //     $this->load->model('m_tanggapan');
            //     $detail = $this->m_pengaduan->detail_data($id);
            //     $data['detail_tanggapan'] = $detail;
            //     $this->load->view('templates/header');
            //     $this->load->view('templates/sidebar');
            //     $this->load->view('detail_tanggapan', $data);
            //     $this->load->view('templates/footer');   
            // }





    }



?>