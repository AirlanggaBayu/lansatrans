<?php
class Crud extends CI_Model
{
    #fungsi ini untuk menampilkan data
    function tampil_data($table)
    {
        return $this->db->get($table)->result();
    }

    #fungsi ini untuk menghapus data
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    #fungsi ini untuk menambah data
    function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    #fungsi ini untuk mengupdate data
    function ubah_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    #fungsi ini untuk menampilkan data berdasarkan id
    function detail_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    #fungsi ini untuk menghapus data


    public function hapus($id)
    {
        $this->db->where('id_supir', $id);
        $this->db->delete('supir');
        //function ini digunakan untuk menghapus data, hapus data disini berdasarkan id
    }

    function joinData($table1, $table2, $table3, $table4, $table5, $join1, $join2, $join3, $join4)
    {
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        $this->db->join($table5, $join4);
        return $this->db->get()->result();
    }
    function joinDataDetail($where)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('rute', 'rute.id_rute = pemesanan.id_rute', 'left');
        $this->db->join('mobil', 'mobil.id_mobil = pemesanan.id_mobil', 'left');
        $this->db->where($where);
        return $this->db->get();
    }
    // function joinDataDetail($where,$table1, $table2,$join1){
    //     $this->db->select('*');
    //     $this->db->from($table1);
    //     $this->db->join($table2, $join1);
    //     $this->db->where('pemesanan.id_pemesanan', '8');
    //     return $this->db->get();
    // }

    public function lihat()
    {
        $id = $this->session->userdata('username_pelanggan');
        return $this->db->get_where('pemesanan', array('username_pelanggan' => $id));
    }
}
