<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getStatus()
    {
        $query = "SELECT `user`.*, `user_role`.`role`, `level`.`level`
                FROM `user` JOIN `user_role`
                ON `user`.`role_id`=`user_role`.`id`
                JOIN `level` ON `user`.`level_id`=`level`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    public function getlevel()
    {
        $query = "SELECT `user`.*, `level`.`level`
                FROM `user` JOIN `level`
                ON `user`.`level_id`=`level`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    public function akseskit()
    {
        $query = "SELECT `user`.*, `kit`.`ulpl`
                FROM `user` JOIN `kit`
                ON `user`.`kit_id`=`kit`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    public function getSubmenu()
    {
        $query = "SELECT `user`. `name`, `user_sub_menu`";
    }
}
