<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Srpltu_model extends CI_Model
{
    //pie_sr
    function GetPie()
    {
        $query = $this->db->query("SELECT type, COUNT(type) AS jumlah FROM tb_sr GROUP BY type")->result();
        return $query;
    }
}//end model
