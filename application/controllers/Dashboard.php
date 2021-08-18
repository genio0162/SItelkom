<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        cek_session();
    }

    public function index()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();

        $cek['title'] = 'Dashboard';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $cek['userr'] = $this->db->get('user')->num_rows();
        $cek['list'] = $this->db->get('list_pengajuan')->num_rows();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notifai'] = $this->db->get('notifikasi_pengajuan')->num_rows();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();
        $cek['struk'] = $this->db->get('data_struk')->num_rows();
        $cek['stok'] = $this->db->get('stok_gudang')->num_rows();

        $this->load->view('template/header', $cek);
        if ($queryId['role'] == 1) {
            $this->load->view('template/mainsidebar', $cek);
        }
        if ($queryId['role'] == 2) {
            $this->load->view('template/mainsidebartek', $cek);
        }
        if ($queryId['role'] == 3) {
            $this->load->view('template/mainsidebarman', $cek);
        }
        if ($queryId['role'] == 1) {
            $this->load->view('template/topbarmin', $cek);
        }
        if ($queryId['role'] == 2) {
            $this->load->view('template/topbartek', $cek);
        }
        if ($queryId['role'] == 3) {
            $this->load->view('template/topbar', $cek);
        }
        if ($queryId['role'] == 1) {
            $this->load->view('dashboard/v_dashboard', $cek);
        }
        if ($queryId['role'] == 2) {
            $this->load->view('dashboard/v_dashboardtek', $cek);
        }
        if ($queryId['role'] == 3) {
            $this->load->view('dashboard/v_dashboardman', $cek);
        }
        $this->load->view('template/footer');
    }
}
