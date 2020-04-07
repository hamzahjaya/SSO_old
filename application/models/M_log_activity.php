<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log_activity extends CI_Model {

/*
|--------------------------------------------------------------------------
|	LIST PROPERTY
|--------------------------------------------------------------------------
*/

    // SETUP PROPERTY ACCESS DATA
    private $tabel          = "t_log";
    private $kolom          = "id_log, id_token_aplikasi, username, ip, waktu, keterangan";
    private $kolom_tanggal  = "waktu";
    private $column_order   = array('id_log', 'id_token_aplikasi', 'username', 'ip', 'waktu', 'keterangan');
    private $column_search  = array('id_log', 'id_token_aplikasi', 'username', 'ip', 'waktu', 'keterangan');

/*
|--------------------------------------------------------------------------
|	CODE PROGRAM
|--------------------------------------------------------------------------
*/

	public function count_fil() {
        $this->data_query($this->tabel);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->tabel);
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->count_all_results();
    }

    public function simpan_data($data) {
        $this->db->insert($this->tabel, $data);
    }

	public function data_list() {
        $this->data_query($this->tabel);
        if(!empty($_POST['length']) && ($_POST['length'] != -1)) {
            $this->db->limit(antiinjection($_POST['length']), antiinjection($_POST['start']));
        }
        $query = $this->db->get();
        return $query->result();
    }

	private function data_query($tabel) {
        $this->db->select($this->kolom);
        $this->db->from($tabel);
        $this->db->where('id_user', $this->session->userdata('id_user'));
		$i = 0;
        foreach ($this->column_search as $item) {
            // JIKA DATATABLE MENGIRIMKAN PENCARIAN DATA
            if(!empty($_POST['search']['value'])) {
                if($i===0) {
                    $this->db->group_start();
                    $this->db->like($item, antiinjection($_POST['search']['value']));
                } else {
                    $this->db->or_like($item, antiinjection($_POST['search']['value']));
                }
                if(count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                } 
            }
            // JIKA DATATABLE MENGIRIMKAN PENCARIAN TANGGAL
            // if(!empty($_POST['cari_tgl'])) {
            //     $tgl = drp_ke_db(antiinjection($_POST['cari_tgl']));
            //     $this->db->where($this->kolom_tanggal . " BETWEEN '".$tgl['awal']." 00:00:00' AND '".$tgl['akhir']." 23:59:59'");
            // }
            // $i++;
        }
        if(isset($_POST['order'])) {
            $this->db->order_by($this->column_order[antiinjection($_POST['order']['0']['column']) - 1], antiinjection($_POST['order']['0']['dir']));
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
}