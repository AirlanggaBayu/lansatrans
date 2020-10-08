<?php
    class Crud extends CI_Model{
        #fungsi ini untuk menampilkan data
        function tampil_data($table){
            return $this->db->get($table);
        }

        #fungsi ini untuk menghapus data
        function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        #fungsi ini untuk menambah data
        function tambah_data($data, $table){
            $this->db->insert($table, $data);
        }

        #fungsi ini untuk mengupdate data
        function ubah_data($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        #fungsi ini untuk menampilkan data berdasarkan id
        function detail_data($where, $table){
            return $this->db->get_where($table, $where);
        }
    }
?>