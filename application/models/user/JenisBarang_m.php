<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisBarang_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('data_jenis_barang');
        if ($id != null) {
            $this->db->where('id_barang', $id);
        } else {
            $this->db->order_by('id_barang', 'desc');
        }
        $query = $this->db->get();
        return $query;
    }

    public function addData($post)
    {
        $this->db->set('id_barang', htmlspecialchars($post['id_barang'], true));
        $this->db->set('nama_barang', htmlspecialchars($post['nama_barang'], true));
        if ($post['detail_barang'] != null) {
            $this->db->set('detail_barang', htmlspecialchars($post['detail_barang'], true));
        }
        $this->db->set('distributor', htmlspecialchars($post['distributor'], true));
        $this->db->insert('data_jenis_barang');
    }

    public function editData($post, $id)
    {
        $this->db->set('id_barang', htmlspecialchars($post['id_barang'], true));
        $this->db->set('nama_barang', htmlspecialchars($post['nama_barang'], true));
        $this->db->set('detail_barang', htmlspecialchars($post['detail_barang'], true));
        $this->db->set('distributor', htmlspecialchars($post['distributor'], true));
        $this->db->where('id_barang', $id);
        $this->db->update('data_jenis_barang');
    }

    public function deleteData($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('data_jenis_barang');
    }
}

/* End of file JenisBarang_m.php */
