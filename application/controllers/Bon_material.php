<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bon_material extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bon');
        $this->load->library('form_validation');
        $this->load->library(array('cart'));
        $this->load->helper('url');
        cek_session();
    }

    public function permintaan()
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $cek['title'] = 'Permintaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['jumlah'] = $this->db->get('stok_gudang')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebartek', $cek);
        $this->load->view('template/topbartek', $cek);
        if ($queryId['id_wilayah'] == 1) {
            $this->load->view('bon_material/v_permohonan', $cek);
        }
        if ($queryId['id_wilayah'] == 2) {
            $this->load->view('bon_material/v_permohonan2', $cek);
        }
        if ($queryId['id_wilayah'] == 3) {
            $this->load->view('bon_material/v_permohonan3', $cek);
        }
        $this->load->view('template/footer');
    }

    public function data_permintaan()
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $cek['title'] = 'Data permintaan';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['jumlah'] = $this->db->get('stok_gudang')->result_array();
        $cek['barkel'] = $this->db->get('lap_barkel')->result_array();
        $cek['barkel2'] = $this->db->get('lap_barkel2')->result_array();
        $cek['barkel3'] = $this->db->get('lap_barkel3')->result_array();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebartek', $cek);
        $this->load->view('template/topbartek', $cek);
        if ($queryId['id_wilayah'] == 1) {
            $this->load->view('bon_material/v_datapermintaan', $cek);
        }
        if ($queryId['id_wilayah'] == 2) {
            $this->load->view('bon_material/v_datapermintaan2', $cek);
        }
        if ($queryId['id_wilayah'] == 3) {
            $this->load->view('bon_material/v_datapermintaan3', $cek);
        }
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $stok = $this->db->get('stok_gudang')->result_array();


        $data = array(
            'namak'      => $this->input->post('namak'),
            'id'      => $this->input->post('id_barang'),
            'tanggal'    => $this->input->post('date'),
            'name'    => $this->input->post('nama'),
            'price'   => $this->input->post('jenis'),
            'satuan'   => $this->input->post('satuan'),
            'keterangan'   => $this->input->post('keterangan'),
            'qty'     => $this->input->post('qty')
        );

        $this->cart->insert($data);
        redirect('bon_material/permintaan');
    }

    public function keluar()
    {
        $nofrak = $this->M_bon->get_nofrak();
        $order_proses = $this->M_bon->kurang($nofrak);
        if ($order_proses) {
            $this->cart->destroy();
            redirect('bon_material/permintaan');
            $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil memproses Data</div>');
        } else {
            redirect('bon_material/permintaan');
        }
    }

    public function keluar2()
    {
        $nofrak = $this->M_bon->get_nofrak2();
        $order_proses = $this->M_bon->kurang($nofrak);
        if ($order_proses) {
            $this->cart->destroy();
            redirect('bon_material/permintaan');
            $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil memproses Data</div>');
        } else {
            redirect('bon_material/permintaan');
        }
    }

    public function keluar3()
    {
        $nofrak = $this->M_bon->get_nofrak3();
        $order_proses = $this->M_bon->kurang($nofrak);
        if ($order_proses) {
            $this->cart->destroy();
            redirect('bon_material/permintaan');
            $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil memproses Data</div>');
        } else {
            redirect('bon_material/permintaan');
        }
    }

    public function remove($id)
    {
        $data = array(
            'id' => $id,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('bon_material/permintaan');
    }

    public function hapus()
    {

        $this->cart->destroy();
        redirect('bon_material/permintaan');
    }

    function cetak_pengeluaran()
    {
        $cek['stok'] = $this->db->get_where('lap_barkel', ['nofrak' => $this->input->post('nofrak')])->result_array();
        $cek['nama'] = $this->db->get_where('lap_barkel', ['nofrak' => $this->input->post('nofrak')])->row_array();
        $this->load->view('file_print/v_p_permintaan', $cek);
    }

    function cetak_pengeluaran2()
    {
        $cek['stok'] = $this->db->get_where('lap_barkel2', ['nofrak' => $this->input->post('nofrak')])->result_array();
        $cek['nama'] = $this->db->get_where('lap_barkel2', ['nofrak' => $this->input->post('nofrak')])->row_array();
        $this->load->view('file_print/v_p_permintaan2', $cek);
    }

    function cetak_pengeluaran3()
    {
        $cek['stok'] = $this->db->get_where('lap_barkel3', ['nofrak' => $this->input->post('nofrak')])->result_array();
        $cek['nama'] = $this->db->get_where('lap_barkel3', ['nofrak' => $this->input->post('nofrak')])->row_array();
        $this->load->view('file_print/v_p_permintaan3', $cek);
    }

    public function coba()
    {
        if (isset($_POST['name'])) {
            echo 'YES!!';
        }
    }

    public function tambahk()
    {
        $this->load->view('transaksi/coba');
    }
}
