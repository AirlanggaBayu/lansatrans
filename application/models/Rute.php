<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Rute extends CI_Model
{

    public function category()
    {
        $query = $this->db->get('rute')->result();
        return $query;
    }

    function get_data_barang_bykode($kode)
    {
        $this->db->where('id_rute', $kode);
        $hasil = $this->db->get('rute');

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
            // foreach ($hasil->result() as $data) {
            //     $hasil = array(
            //         'id_tujuan' => $data->kode,
            //         'jam' => $data->jam,
            //         'harga' => $data->harga,

            //     );
            // }
        } else {
            return false;
        }
    }
}
