<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Labuhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pembangkit_model', 'kit');
        $kit_id = 1;
        $data['total'] = $this->kit->getkit($kit_id);

        $where = [
            'kit_id' => $kit_id
        ];
        $data['pembangkit'] = $this->db->get_where('db_mesin', $where)->result_array();
        $data['title'] = $this->db->get_where('kit', ['id' => $kit_id])->result_array();

        $date = date('d-m-Y');
        $lusa = date('Y-m-d', strtotime('+1 days', strtotime($date)));
        $where1 = [
            'tanggal' => $lusa
        ];
        // $dimana = [
        //     'tanggal' => $lusa
        // ];
        $tgl = $this->db->get_where('tanggal', ['tanggal' => $lusa])->row_array();
        if ($tgl['tanggal'] == 0) {
            $this->db->insert('tanggal', $where1);
        }


        $this->load->view('template/header_kit', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/kit', $data);
        $this->load->view('template/footer', $data);
    }
    public function roh()
    {
        $kit_id = 1;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = $this->db->get_where('kit', ['id' => $kit_id])->result_array();
        $this->load->model('Pembangkit_model', 'kit');
        $data['total'] = $this->kit->getkit($kit_id);

        $filter = $this->input->post('tanggal');
        $now = date('Y-m-d');
        if (!$filter == 0) {
            $w = ['tanggal' => $filter];
        } else {
            $w = ['tanggal' => $now];
        }
        //$this->db->order_by('id', 'DESC');
        $tgl = $this->db->get_where('tanggal', $w)->row_array();
        // if ($filter > 0) {
        //     $tanggal = $filter;
        // } else {
        $tanggal = $tgl['id'];
        // }
        $data['date'] = $tgl['tanggal'];
        $data['total_pagi'] = $this->kit->total_pagi_labuhan($tanggal);
        $data['total_siang'] = $this->kit->total_siang_labuhan($tanggal);
        $data['total_sore'] = $this->kit->total_sore_labuhan($tanggal);

        $data['roh'] = $this->kit->real1($tanggal);
        $data['roh2'] = $this->kit->real2($tanggal);
        $data['roh3'] = $this->kit->real3($tanggal);
        $data['roh4'] = $this->kit->real4($tanggal);
        $data['roh5'] = $this->kit->real5($tanggal);
        $data['roh6'] = $this->kit->real6($tanggal);
        $data['roh7'] = $this->kit->real7($tanggal);
        $data['roh8'] = $this->kit->real8($tanggal);
        $data['roh9'] = $this->kit->real9($tanggal);
        $data['tgl'] = $this->db->get_where('tanggal', ['id' => $tanggal])->row_array();
        //fungsi mesin
        $data['mesin1'] = $this->db->get_where('db_mesin', ['id' => 1])->row_array();
        $data['mesin2'] = $this->db->get_where('db_mesin', ['id' => 2])->row_array();
        $data['mesin3'] = $this->db->get_where('db_mesin', ['id' => 3])->row_array();
        $data['mesin4'] = $this->db->get_where('db_mesin', ['id' => 4])->row_array();
        $data['mesin5'] = $this->db->get_where('db_mesin', ['id' => 5])->row_array();
        $data['mesin6'] = $this->db->get_where('db_mesin', ['id' => 6])->row_array();
        $data['mesin7'] = $this->db->get_where('db_mesin', ['id' => 7])->row_array();
        $data['mesin8'] = $this->db->get_where('db_mesin', ['id' => 8])->row_array();
        $data['mesin9'] = $this->db->get_where('db_mesin', ['id' => 9])->row_array();
        //end fungsi mesin

        $where = [
            'kit_id' => $kit_id
        ];
        $data['mesin'] = $this->db->get_where('db_mesin', $where)->result_array();



        $this->load->view('template/header_kit', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/roh1', $data);
        $this->load->view('template/footer', $data);
    }
    public function updateDm_pagi()
    {
        $mesin_id = $this->input->post('mesin_id');
        $tanggal_id = $this->input->post('tanggal_id');
        $pagi = $this->input->post('pagi');
        $siang = $this->input->post('siang');
        $sore = $this->input->post('sore');
        $data = [
            'mesin_id' => $mesin_id,
            'kit_id' => 1,
            'pagi' => $pagi,
            'siang' => $siang,
            'sore' => $sore,
            'tanggal_id' => $tanggal_id
        ];
        $where = [
            'mesin_id' => $mesin_id,
            'tanggal_id' => $tanggal_id
        ];
        $roh = $this->db->get_where('realisasi_tambora', $where)->row_array();
        // jika tanggal dan mesin sudah ada
        if ($roh > 0) {
            //jika data sudah ada
            if ($pagi > 0) {
                $this->db->where($where);
                $this->db->update('realisasi_tambora', ['pagi' => $pagi]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Declare Daya Mampu berhasil!
            </div>');
                redirect('labuhan/roh');
            } else if ($siang > 0) {
                $this->db->where($where);
                $this->db->update('realisasi_tambora', ['siang' => $siang]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Declare Daya Mampu berhasil!
            </div>');
                redirect('labuhan/roh');
            } else {
                $this->db->where($where);
                $this->db->update('realisasi_tambora', ['sore' => $sore]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Declare Daya Mampu berhasil!
            </div>');
                redirect('labuhan/roh');
            }
        } else {
            // jika data belum ada
            $this->db->insert('realisasi_tambora', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Declare Daya Mampu berhasil!
            </div>');
            redirect('labuhan/roh');
        }
    }
    public function realisasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Realisasi Beban';
        $this->load->model('Pembangkit_model', 'kit');
        $filter = $this->input->post('tanggal');

        $now = date('Y-m-d');
        if (!$filter == 0) {
            $w = [
                'tanggal' => $filter
            ];
        } else {
            $w = [
                'tanggal' => $now
            ];
        }
        $tgl = $this->db->get_where('tanggal', $w)->row_array();
        $data['tgl'] = $this->db->get_where('tanggal', $w)->row_array();

        $data['ruston1'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 1, 'tanggal_id' => $tgl['id']])->row_array();
        $data['swd2'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 2, 'tanggal_id' => $tgl['id']])->row_array();
        $data['daihatsu3'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 3, 'tanggal_id' => $tgl['id']])->row_array();
        $data['deutz4'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 4, 'tanggal_id' => $tgl['id']])->row_array();
        $data['deutz5'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 5, 'tanggal_id' => $tgl['id']])->row_array();
        $data['niigata6'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 6, 'tanggal_id' => $tgl['id']])->row_array();
        $data['allen7'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 7, 'tanggal_id' => $tgl['id']])->row_array();
        $data['allen8'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 8, 'tanggal_id' => $tgl['id']])->row_array();
        $data['caterpilar9'] = $this->db->get_where('realisasi_tambora', ['mesin_id' => 9, 'tanggal_id' => $tgl['id']])->row_array();
        //total per-jam
        $tg = $tgl['id'];
        $data['tot1'] = $this->kit->tot1($tg);
        $data['tot2'] = $this->kit->tot2($tg);
        $data['tot3'] = $this->kit->tot3($tg);
        $data['tot4'] = $this->kit->tot4($tg);
        $data['tot5'] = $this->kit->tot5($tg);
        $data['tot6'] = $this->kit->tot6($tg);
        $data['tot7'] = $this->kit->tot7($tg);
        $data['tot8'] = $this->kit->tot8($tg);
        $data['tot9'] = $this->kit->tot9($tg);
        $data['tot10'] = $this->kit->tot10($tg);
        $data['tot11'] = $this->kit->tot11($tg);
        $data['tot12'] = $this->kit->tot12($tg);
        $data['tot13'] = $this->kit->tot13($tg);
        $data['tot14'] = $this->kit->tot14($tg);
        $data['tot15'] = $this->kit->tot15($tg);
        $data['tot16'] = $this->kit->tot16($tg);
        $data['tot17'] = $this->kit->tot17($tg);
        $data['tot18'] = $this->kit->tot18($tg);
        $data['tot19'] = $this->kit->tot19($tg);
        $data['tot20'] = $this->kit->tot20($tg);
        $data['tot21'] = $this->kit->tot21($tg);
        $data['tot22'] = $this->kit->tot22($tg);
        $data['tot23'] = $this->kit->tot23($tg);
        $data['tot24'] = $this->kit->tot24($tg);

        // $this->load->view('template/header', $data);
        // $this->load->view('template/topbar_kit', $data);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/realisasi', $data);
        $this->load->view('template/footer', $data);
    }
    public function update_real()
    {
        $id = $this->input->post('id');
        $data_column = $this->input->post('table_column');
        $value = $this->input->post('value');
        $data = [
            $data_column => $value
        ];
        $this->db->where('id', $id);
        $this->db->update('realisasi_tambora', $data);
        redirect('labuhan/realisasi');
    }
}
