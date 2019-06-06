<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pltu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Pie SR PLTU Sumbawa';
        $this->load->model('srpltu_model', 'sr');
        $data['pie_sr'] = $this->sr->GetPie();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pltu/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function asset($offset = 0)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asset Register';
        $data['asset'] = $this->db->get('tb_asset')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pltu/asset', $data);
        $this->load->view('template/footer', $data);
    }
}
