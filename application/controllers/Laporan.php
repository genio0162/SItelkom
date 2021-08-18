<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_grafik');
        $this->load->model('M_data');
        $this->load->library('form_validation');
        $this->load->helper('url');
        cek_session();
    }

    public function pengajuan_pengadaan()
    {
        $queryStatus = "SELECT *
        FROM `list_pengajuan` JOIN `status`
          ON `list_pengajuan`.`statusin` = `status`.`statusan`
       WHERE `list_pengajuan`.`statusin` = `status`.`statusan`
     ";
        $status = $this->db->query($queryStatus)->result_array();
        $cek['title'] = 'Pengajuan Pengadaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['list'] = $this->db->get('list_pengajuan')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('laporan/v_pengajuanpengadaanman', $cek);
        $this->load->view('template/footer');
    }

    public function accept($id)
    {
        $data = array(
            'statusin' => 1
        );

        $where = array(
            'id' => $id
        );

        $this->M_data->update_data($where, $data, 'list_pengajuan');
        $this->db->insert('notifikasi_manager', $data);
        redirect('laporan/pengajuan_pengadaan');
    }

    public function tolak($id)
    {
        $data = array(
            'statusin' => 2
        );

        $where = array(
            'id' => $id
        );

        $this->M_data->update_data($where, $data, 'list_pengajuan');
        $this->db->insert('notifikasi_manager', $data);
        redirect('laporan/pengajuan_pengadaan');
    }

    public function print_pengajuan($id)
    {
        $cek['title'] = 'Print BA. Pengajuan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id' => $id);
        $cek['print'] = $this->M_data->edit_data($where, 'list_pengajuan')->result_array();

        $this->load->view('file_print/v_p_pengajuan', $cek);
    }

    public function upstruk()
    {
        $cek['title'] = 'Struk Penerimaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['cek'] = $this->db->get('data_struk')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $cek["files"] = directory_map("./asset/file_upload/pdf/");

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('laporan/v_strukman', $cek);
        $this->load->view('template/footer');
    }

    public function pengadaan()
    {
        $cek['title'] = 'Data Pengadaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();
        $cek['graf_bln'] = $this->M_grafik->get_bulan();
        $cek['graf_bln21'] = $this->M_grafik->get_bulan21();
        $cek['graf_bln31'] = $this->M_grafik->get_bulan31();
        $cek['graf_bln2'] = $this->M_grafik->get_bulan2();
        $cek['graf_bln22'] = $this->M_grafik->get_bulan22();
        $cek['graf_bln32'] = $this->M_grafik->get_bulan32();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('laporan/v_transaksi', $cek);
        $this->load->view('template/footer');
    }

    public function bulanan()
    {
        $cek['title'] = 'Grafik Pengadaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpengadaan', $cek);
    }

    public function bulanan21()
    {
        $cek['title'] = 'Grafik Pengadaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph21($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpengadaan2', $cek);
    }

    public function bulanan31()
    {
        $cek['title'] = 'Grafik Pengadaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph31($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpengadaan3', $cek);
    }

    public function bulanan2()
    {
        $cek['title'] = 'Grafik Permintaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph2($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpermintaan', $cek);
    }

    public function bulanan22()
    {
        $cek['title'] = 'Grafik Permintaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph22($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpermintaan2', $cek);
    }

    public function bulanan32()
    {
        $cek['title'] = 'Grafik Permintaan';
        $cek['title2'] = 'Grafik Data Bulanan';

        $bulan = $this->input->post('bln', TRUE);
        $cek['bulanan'] = $this->M_grafik->graph32($bulan);
        $cek['bln'] = $bulan;

        $this->load->view('laporan/v_grafpermintaan3', $cek);
    }

    public function permintaan()
    {
        $cek['title'] = 'Data Permintaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('laporan/v_datapermintaan', $cek);
        $this->load->view('template/footer');
    }

    public function stok_gudang()
    {
        $cek['title'] = 'Stok Gudang';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('laporan/v_stokgudangman', $cek);
        $this->load->view('template/footer');
    }

    public function lihat($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'notifikasi_pengajuan');
        redirect('laporan/pengajuan_pengadaan');
    }
}
