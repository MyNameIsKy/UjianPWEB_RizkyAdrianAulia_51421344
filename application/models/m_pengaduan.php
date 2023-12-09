<?php 

    class M_pengaduan extends CI_Model{

        public function tampil_data(){
            $query = "SELECT a.nama, p.tgl_pengaduan, p.isi_laporan, p.foto, p.id_pengaduan FROM masyarakat as a INNER JOIN 
            pengaduan as p ON a.nik = p.nik";
            // return $this->db->get('pengaduan');
            return $this->db->query($query);
        }

        public function input_data($data, $table){
            $this->db->insert($table, $data);
        }

        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function edit_data($where, $table){
            return $this->db->get_where($table,$where);
        }

        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        public function detail_data($id = NULL){
            $query = $this->db->get_where('pengaduan', array('id_pengaduan' => $id))->row();
            return $query;
        }

        public function hitung_user(){
            $query = "SELECT count(nama) as jum from masyarakat";
            return $this->db->query($query);
        }

        public function hitung_pengaduan(){
            $query = "SELECT count(id_pengaduan) as peng from pengaduan";
            return $this->db->query($query);
        }

        public function hitung_tanggapan(){
            $query = "SELECT count(id_tanggapan) as tang from tanggapan";
            return $this->db->query($query);
        }

    }

