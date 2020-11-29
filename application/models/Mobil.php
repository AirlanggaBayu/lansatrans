<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mobil extends CI_Model
{

    public function get_category()
    {
        $query = $this->db->get('mobil')->result();
        return $query;
    }
}
