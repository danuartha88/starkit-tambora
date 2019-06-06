<?php
/**
 *
 */
class Asset_model extends CI_Model
{
    function data_asset($perpage, $offset)
    {
        return $this->db->get('tb_asset', $perpage, $offset)->result();
    }
    function cari($berdasarkan, $yangdicari)
    {
        $this->db->from("tb_asset");

        switch ($berdasarkan) {
            case '':
                $this->db->like('kks', $yangdicari);
                $this->db->or_like('equipment', $yangdicari);
                $this->db->or_like('foto', $yangdicari);
                break;
            default:
                $this->db->like($berdasarkan, $yangdicari);
        }
        return $this->db->get();
    }
    function equipment()
    {

        return $this->db->get('tb_asset');
    }
    //get asset
    function search_asset($equipment)
    {
        $this->db->like('equipment', $equipment, 'both');
        $this->db->order_by('equipment', 'ASC');
        $this->db->limit(20);
        return $this->db->get('tb_asset')->result();
    }
    //get asset
    function get_asset($where, $table)
    {

        return $this->db->get_where($table, $where);
    }
}//end model
