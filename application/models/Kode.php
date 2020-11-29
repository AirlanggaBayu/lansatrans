<?php
class Kode extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('pemesanan')->result();
    }

    public function inputBarang($data)
    {
        $this->db->insert('pemesanan', $data);
    }

    public function kodee()
    {
        $this->db->select('RIGHT(pemesanan.kode_pesan,2) as kode_pesan', FALSE);
        $this->db->order_by('kode_pesan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pemesanan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kodee = intval($data->kode_pesan) + 1;
        } else {
            $kodee = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kodee, 3, "0", STR_PAD_LEFT);
        $kodetampil = "LT" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
