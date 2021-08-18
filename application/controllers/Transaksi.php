<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->model('M_transaksi');
        $this->load->library('form_validation');
        $this->load->library(array('cart'));
        $this->load->helper('url');
        cek_session();
    }

    function get_barang()
    {

        $kobar = $this->input->post('id_barang');
        $x['brg'] = $this->M_transaksi->get_barang($kobar);
        $this->load->view('transaksi/v_pengajuanpengadaan', $x);
    }

    public function pengajuan_pengadaan()
    {
        $cek['title'] = 'Pengajuan Pengadaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['list'] = $this->db->get('list_pengajuan')->result_array();
        $cek['bar1'] = $this->db->get('material')->result_array();
        $cek['bar2'] = $this->db->get('tipe')->result_array();
        $cek['bar3'] = $this->db->get('satuan')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        $this->load->view('transaksi/v_pengajuanpengadaan', $cek);
        $this->load->view('template/footer');
    }

    public function input_pengajuan()
    {
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Pengajuan Pengadaan';
            $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
            $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();
            $cek['stok'] = $this->db->get('stok_gudang')->result_array();
            $cek['bar1'] = $this->db->get('material')->result_array();
            $cek['bar2'] = $this->db->get('tipe')->result_array();
            $cek['bar3'] = $this->db->get('satuan')->result_array();

            $this->load->view('template/header', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('template/topbarmin', $cek);
            $this->load->view('transaksi/v_pengajuanpengadaan', $cek);
            $this->load->view('template/footer');
        } else {
            $data = [
                'tipe' => $this->input->post('tipe'),
                'satuan' => $this->input->post('satuan'),
                'jumlah' => $this->input->post('jumlah'),
                'pemohon' => $this->input->post('nama'),
                'statusin' => 0
            ];

            $datas = [
                'pemohon' => $this->input->post('nama'),
                'statusin' => 0
            ];

            $this->db->insert('list_pengajuan', $data);
            $this->db->insert('notifikasi_pengajuan', $datas);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil membuat pengajuan</div>');
            redirect('transaksi/pengajuan_pengadaan');
        }
    }

    public function update1()
    {
        $id = $this->input->post('id');
        $tipe = $this->input->post('tipe');
        $satuan = $this->input->post('satuan');
        $jumlah = $this->input->post('jumlah');
        $pemohon = $this->input->post('nama');

        $data = [
            'tipe' => $tipe,
            'satuan' => $satuan,
            'jumlah' => $jumlah,
            'pemohon' => $pemohon,
            'statusin' => 0
        ];

        $datas = [
            'pemohon' => $pemohon,
            'statusin' => 0
        ];

        $where = array(
            'id' => $id
        );

        $this->M_data->update_data($where, $data, 'list_pengajuan');
        $this->db->insert('notifikasi_pengajuan', $datas);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil memperbarui pengajuan</div>');
        redirect('transaksi/pengajuan_pengadaan');
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
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $cek["files"] = directory_map("./asset/file_upload/pdf/");

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        $this->load->view('transaksi/v_struk', $cek);
        $this->load->view('template/footer');
    }

    public function upload()
    {
        $config['upload_path']          = './asset/file_upload/pdf/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('transaksi/v_struk', $error);
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name']
            );

            $this->M_transaksi->insert($data);
            redirect('transaksi/upstruk');
        }
    }

    public function barmas()
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $cek['title'] = 'Barang Masuk';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        //$cek['brg'] = $this->M_transaksi->get_barang($kobar);

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        if ($queryId['id_wilayah'] == 1) {
            $this->load->view('transaksi/v_barmas', $cek);
        }
        if ($queryId['id_wilayah'] == 2) {
            $this->load->view('transaksi/v_barmas2', $cek);
        }
        if ($queryId['id_wilayah'] == 3) {
            $this->load->view('transaksi/v_barmas3', $cek);
        }
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['tambah'])) {
            $post = $this->input->post(null, TRUE);
            $this->M_transaksi->lap_barmas($post);
            $this->M_transaksi->tambah_stok($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil menambahkan stok</div>');
            } else  $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-danger" role="alert">Gagal Menambahkan Stok</div>');
            redirect('transaksi/barmas');
        }
    }

    public function tambah_pengajuanstok($id)
    {
        if (isset($_POST['tambah'])) {
            $post = $this->input->post(null, TRUE);
            $this->M_transaksi->lap_barmas_pengajuan($post);
            $this->M_transaksi->tambah_stok_pengadaan($post, $id);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil menambahkan stok</div>');
            } else  $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-danger" role="alert">Gagal Menambahkan Stok</div>');
            redirect('transaksi/pengajuan_pengadaan');
        }
    }

    public function lihat($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'notifikasi_manager');
        redirect('transaksi/pengajuan_pengadaan');
    }

    // public function coba()
    // {
    //     if (isset($_POST['tipe'])) {

    //         $tipe = mysqli_real_escape_string($db, $_POST['tipe']);
    //         $satuan = mysqli_real_escape_string($db, $_POST['satuan']);
    //         $query = $this->db->insert($tipe['tipe'], $satuan['satuan']);
    //         $result = mysqli_query($query);

    //         if (!$result) {
    //             die('This went bad' . mysqli_error($db));
    //         }
    //     }
    // }
}
