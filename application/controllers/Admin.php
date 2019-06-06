<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';
        $this->db->where('id !=', 1);
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New role added!
            </div>');
            redirect('admin/role');
        }
    }
    public function roleaccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('template/footer', $data);
    }
    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access changed!
          </div>');
    }
    public function editRole()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('template/footer', $data);
        } else {
            $id = $this->input->post('id');
            $data = [
                'role' => $this->input->post('role')
            ];
            $this->db->where('id', $id);
            $this->db->update('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Role has been edited!
            </div>');
            redirect('admin/role');
        }
    }
    public function deleteRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Role has been deleted!
            </div>');
        redirect('admin/role');
    }
    public function userstatus()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'User Activation';
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->model('Admin_model', 'admin');
        $data['level'] = $this->db->get('level')->result_array();
        // $data['kit'] = $this->admin->akseskit();
        $data['all_kit'] = $this->db->get('kit')->result_array();
        $data['member'] = $this->admin->getStatus();
        $data['getlvl'] = $this->admin->getlevel();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/userstatus', $data);
        $this->load->view('template/footer', $data);
    }
    public function deleteuser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been deleted!
            </div>');
        redirect('admin/userstatus');
    }
    public function useractivated($id)
    {
        $data = ['is_active' => 1];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been activated!
            </div>');
        redirect('admin/userstatus');
    }
    public function userdisactivated($id)
    {
        $data = ['is_active' => 0];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been disactivated!
            </div>');
        redirect('admin/userstatus');
    }
    public function newadmin($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $role_id = $this->input->post('role_id');
        $data = ['role_id' => $role_id];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been change!
            </div>');
        redirect('admin/userstatus');
    }
    public function akses_kit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Change Akses KIT';
        $data['user1'] = $this->db->get_where('user', ['id' => $id])->row_array();

        // $this->db->where('id !=', 1);
        $data['submenu'] = $this->db->get_where('user_sub_menu', ['menu_id' => 4])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/kit_akses', $data);
        $this->load->view('template/footer', $data);
    }
    public function useraccess()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'User Access Submenu';


        $data['member'] = $this->db->get('user')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/userakseskit', $data);
        $this->load->view('template/footer', $data);
    }
    public function ganti_kit($id)
    {
        // $kit_id = $this->input->post('kit_id');
        $data = [
            'kit_id' => $this->input->post('kit_id')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been change access PEMBANGKIT!
            </div>');
        redirect('admin/userstatus');
    }
    public function ganti_level($id)
    {
        $data = [
            'level_id' => $this->input->post('level_id')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            User account has been change access Level!
            </div>');
        redirect('admin/userstatus');
    }
}
