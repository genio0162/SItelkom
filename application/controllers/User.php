<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

        $cek['title'] = 'Kelola User';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();


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
        $this->load->view('user/v_profile', $cek);
        $this->load->view('template/footer');
    }

    public function editprofile()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();

        $cek['title'] = 'Edit Profile';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();


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
        $this->load->view('administrator/v_editprofile', $cek);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $ci = get_instance();
        $id = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $id])->row_array();

        $cek['title'] = 'Edit Profile';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['notif'] = $this->db->get('notifikasi_pengajuan')->result_array();
        $cek['notif1'] = $this->db->get('notifikasi_pengajuan')->num_rows();

        $this->form_validation->set_rules('nama', 'Nama Admin', 'required|trim');

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
            if ($queryId['role'] == 1) {
                $this->load->view('template/topbarmin', $cek);
            }
            if ($queryId['role'] == 2) {
                $this->load->view('template/topbarmin', $cek);
            }
            if ($queryId['role'] == 3) {
                $this->load->view('template/topbar', $cek);
            }
            $this->load->view('administrator/v_editprofile', $cek);
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $jabatan = $this->input->post('jabatan');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10500';
                $config['upload_path'] = './asset/sbadmin/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('nik', $nik);
            $this->db->set('wilayah', $jabatan);
            $this->db->where('username',  $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Merubah Akun</div>');
            redirect('user/editprofile');
        }
    }
}
