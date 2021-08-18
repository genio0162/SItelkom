<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
        $this->load->helper('url');
        cek_session();
    }

    public function index()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();

        $cek['title'] = 'Kelola User';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['waw'] = $this->db->get('user')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

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
        $this->load->view('template/topbar', $cek);
        $this->load->view('administrator/v_keluser', $cek);
        $this->load->view('template/footer');
    }

    public function pengumuman()
    {
        $cek['title'] = 'Kelola Pengumuman';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebarman', $cek);
        $this->load->view('template/topbar', $cek);
        $this->load->view('administrator/v_pengumuman', $cek);
        $this->load->view('template/footer');
    }

    public function userbaru()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();

        $cek['title'] = 'Kelola User';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['waw'] = $this->db->get('user')->result_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->form_validation->set_rules('namaadmin', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
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
            $this->load->view('template/topbar', $cek);
            $this->load->view('administrator/v_keluser', $cek);
            $this->load->view('template/footer');
        } else {
            $datas = [
                'nama' => htmlspecialchars($this->input->post('namaadmin', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password2' => htmlspecialchars($this->input->post('password1', true)),
                'password' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
                'nik' => $this->input->post('nik'),
                'wilayah' => $this->input->post('wilayah'),
                'foto' => 'default.jpg',
                'role' => $this->input->post('role'),
                'id_wilayah' => $this->input->post('id_wilayah'),
                'is_active' => 1,
            ];

            $this->db->insert('user', $datas);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan akun baru</div>');
            redirect('administrator');
        }
    }

    public function hapus1($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus user</div>');
        redirect('administrator');
    }

    public function pengumuman_baru()
    {
        $this->form_validation->set_rules('baru', 'Inputan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Kelola Pengumuman';
            $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $cek['stok'] = $this->db->get('stok_gudang')->result_array();
            $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
            $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

            $this->load->view('template/header', $cek);
            $this->load->view('template/mainsidebarman', $cek);
            $this->load->view('template/topbar', $cek);
            $this->load->view('administrator/v_pengumuman', $cek);
            $this->load->view('template/footer');
        } else {
            $datar = [
                'pengumuman' => $this->input->post('baru')
            ];

            $this->db->insert('pengumuman', $datar);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan pengumuman baru</div>');
            redirect('administrator/pengumuman');
        }
    }

    public function hapus2($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'pengumuman');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus pengumuman</div>');
        redirect('administrator/pengumuman');
    }
}
