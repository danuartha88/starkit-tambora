<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembangkit_model extends CI_Model
{
    public function getkit($kit_id)
    {
        $this->db->where('kit_id', $kit_id);
        $this->db->select('SUM(daya_terpasang) AS total');
        $this->db->from('db_mesin');

        return $this->db->get()->row()->total;
    }
    public function total_pagi_labuhan($tanggal)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tanggal]);
        $this->db->select('SUM(pagi) AS total_pagi');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->total_pagi;
    }
    public function total_siang_labuhan($tanggal)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tanggal]);
        $this->db->select('SUM(siang) AS total_siang');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->total_siang;
    }
    public function total_sore_labuhan($tanggal)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tanggal]);
        $this->db->select('SUM(sore) AS total_sore');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->total_sore;
    }
    // total per-jam
    public function tot1($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(satu) AS tot1');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot1;
    }
    public function tot2($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(dua) AS tot2');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot2;
    }
    public function tot3($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(tiga) AS tot3');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot3;
    }
    public function tot4($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(empat) AS tot4');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot4;
    }
    public function tot5($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(lima) AS tot5');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot5;
    }
    public function tot6($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(enam) AS tot6');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot6;
    }
    public function tot7($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(tujuh) AS tot7');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot7;
    }
    public function tot8($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(delapan) AS tot8');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot8;
    }
    public function tot9($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(sembilan) AS tot9');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot9;
    }
    public function tot10($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(sepuluh) AS tot10');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot10;
    }
    public function tot11($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(sebelas) AS tot11');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot11;
    }
    public function tot12($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duabelas) AS tot12');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot12;
    }
    public function tot13($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(tigabelas) AS tot13');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot13;
    }
    public function tot14($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(empatbelas) AS tot14');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot14;
    }
    public function tot15($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(limabelas) AS tot15');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot15;
    }
    public function tot16($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(enambelas) AS tot16');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot16;
    }
    public function tot17($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(tujuhbelas) AS tot17');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot17;
    }
    public function tot18($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(delapanbelas) AS tot18');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot18;
    }
    public function tot19($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(sembilanbelas) AS tot19');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot19;
    }
    public function tot20($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duanol) AS tot20');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot20;
    }
    public function tot21($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duasatu) AS tot21');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot21;
    }
    public function tot22($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duadua) AS tot22');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot22;
    }
    public function tot23($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duatiga) AS tot23');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot23;
    }
    public function tot24($tg)
    {
        $this->db->where(['kit_id' => 1, 'tanggal_id' => $tg]);
        $this->db->select('SUM(duaempat) AS tot24');
        $this->db->from('realisasi_tambora');

        return $this->db->get()->row()->tot24;
    }
    //end total per-jam
    public function insert_roh($data)
    {
        $this->db->insert('roh_tambora', $data);
    }

    public function real1($tanggal)
    {
        $where = [
            'mesin_id' => 1,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real2($tanggal)
    {
        $where = [
            'mesin_id' => 2,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real3($tanggal)
    {
        $where = [
            'mesin_id' => 3,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real4($tanggal)
    {
        $where = [
            'mesin_id' => 4,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real5($tanggal)
    {
        $where = [
            'mesin_id' => 5,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real6($tanggal)
    {
        $where = [
            'mesin_id' => 6,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real7($tanggal)
    {
        $where = [
            'mesin_id' => 7,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real8($tanggal)
    {
        $where = [
            'mesin_id' => 8,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function real9($tanggal)
    {
        $where = [
            'mesin_id' => 9,
            'tanggal_id' => $tanggal
        ];
        return $this->db->get_where('realisasi_tambora', $where)->row_array();
    }
    public function getallkit()
    {
        $this->db->select('SUM(daya_terpasang) AS total');
        $this->db->from('db_mesin');

        return $this->db->get()->row()->total;
    }
}
