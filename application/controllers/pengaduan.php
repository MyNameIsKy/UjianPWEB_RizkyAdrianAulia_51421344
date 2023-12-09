<?php 

    class Pengaduan extends CI_Controller{

        public function index(){

            $data['pengaduan'] = $this->m_pengaduan->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pengaduan', $data);
		    $this->load->view('templates/footer');   
        }

        public function tambah_aksi(){
            $tgl_pengaduan  = $this->input->post('tgl_pengaduan');
            // $nik            = $this->input->post('nik');
            $isi_laporan    = $this->input->post('isi_laporan');
            $foto           = $_FILES['foto'];
            // $status         = $this->input->post('status');
            if($foto = ''){
                // Tidak Terjadi apa2 bila $foto itu kosong
            }else{
                $config['upload_path']      = './assets/foto';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    echo "Upload Gagal!"; die();    //apabila gagal upload
                }else{
                    $foto = $this->upload->data('file_name'); //Apabila Berhasil
                }
            }


            $data = array(
                'tgl_pengaduan'     => $tgl_pengaduan,
                'nik'               => $this->session->userdata('nik'),
                'isi_laporan'       => $isi_laporan,
                'foto'              => $foto,
                // 'status'            => $status
            );

            $this->m_pengaduan->input_data($data, 'pengaduan');
            redirect('pengaduan/index');

        }

        public function hapus($id){
            
            $where = array ('id_pengaduan' => $id);
            $this->m_pengaduan->hapus_data($where, 'pengaduan');
            redirect('pengaduan');

        }

        public function edit($id){

            $where = array('id_pengaduan'=>$id);
            $data['pengaduan'] = $this->m_pengaduan->edit_data($where, 'pengaduan')->result();

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('edit', $data);
		    $this->load->view('templates/footer');   

        }

        public function update(){

            $tgl_pengaduan  = $this->input->post('tgl_pengaduan');
            $nik            = $this->input->post('nik');
            $isi_laporan    = $this->input->post('isi_laporan');
            // $status         = $this->input->post('status');

            $data = array(
                'tgl_pengaduan'     => $tgl_pengaduan,
                'nik'               => $nik,
                'isi_laporan'       => $isi_laporan,
                // 'status'            => $status
            );

            $where = array(
                'id_pengaduan' => $id
            );

            $this->m_pengaduan->update_data($where,$data,'pengaduan');
            redirect('pengaduan/index');

        }

        public function detail($id){
            $this->load->model('m_pengaduan');
            $detail = $this->m_pengaduan->detail_data($id);
            $data['detail'] = $detail;
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detail', $data);
		    $this->load->view('templates/footer');   
        }
    }
    
    
    
