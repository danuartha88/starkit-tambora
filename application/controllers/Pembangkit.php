<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembangkit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tambora';
        $this->load->model('Pembangkit_model', 'kit');

        $kit_id = $this->input->post('filter');
        if ($kit_id > 0) {
            //jika ada
            $data['total'] = $this->kit->getkit($kit_id);
            $where = [
                'kit_id' => $kit_id
            ];
            $w = [
                'id' => $kit_id
            ];
            $data['judul'] = $this->db->get_where('kit', $w)->row_array();
            $data['pembangkit'] = $this->db->get_where('db_mesin', $where)->result_array();
        } else {
            $w = [
                'id' => $kit_id
            ];
            $data['judul'] = $this->db->get_where('kit', $w)->row_array();
            $data['total'] = $this->kit->getallkit();
            $data['pembangkit'] = $this->db->get('db_mesin')->result_array();
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/tambora', $data);
        $this->load->view('template/footer', $data);
    }
    public function sumbawa()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Neraca Daya Sistem Sumbawa';
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
        //ULPL
        $data['lab'] = $this->db->get_where('kit', ['id' => 1])->row_array();
        $data['alas'] = $this->db->get_where('kit', ['id' => 2])->row_array();
        $data['tlw'] = $this->db->get_where('kit', ['id' => 3])->row_array();
        $data['empang'] = $this->db->get_where('kit', ['id' => 4])->row_array();
        $data['mamak'] = $this->db->get_where('kit', ['id' => 5])->row_array();
        $data['sbtk'] = $this->db->get_where('kit', ['id' => 6])->row_array();
        $data['labaji'] = $this->db->get_where('kit', ['id' => 7])->row_array();
        $data['lebin'] = $this->db->get_where('kit', ['id' => 8])->row_array();
        $data['bgsmd'] = $this->db->get_where('kit', ['id' => 9])->row_array();
        $data['klw'] = $this->db->get_where('kit', ['id' => 10])->row_array();
        $data['lunyuk'] = $this->db->get_where('kit', ['id' => 11])->row_array();
        $data['ltg'] = $this->db->get_where('kit', ['id' => 12])->row_array();
        //end ULPL
        //Tot lbhn
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
        //end tot lbhn

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/sumbawa', $data);
        $this->load->view('template/footer', $data);
    }
    public function labuhan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Realisasi Beban PLTD Labuhan';
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

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pembangkit/labuhan', $data);
        $this->load->view('template/footer', $data);
    }
}
