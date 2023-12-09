<?php 

    class M_tanggapan extends CI_Model{
        public function tampil_data(){
            $query = "SELECT a.id_pengaduan, c.id_tanggapan, b.nama, a.isi_laporan, c.tanggapan, a.status , a.foto 
            FROM pengaduan as a LEFT JOIN masyarakat as b ON a.nik = b.nik LEFT JOIN
            tanggapan c on a.id_pengaduan = c.id_pengaduan LEFT JOIN petugas as d ON d.id_petugas = c.id_petugas 
             WHERE c.id_tanggapan IS NULL";
            // return $this->db->get('tanggapan');
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
            $query = $this->db->get_where('tanggapan', array('id_tanggapan' => $id))->row();
            return $query;
        }
    }

