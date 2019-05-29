<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getStatus()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                FROM `user` JOIN `user_role`
                ON `user`.`role_id`=`user_role`.`id`
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
