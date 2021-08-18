<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_gudang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_datagudang');
        $this->load->model('M_data');
        $this->load->helper('url');
        cek_session();
    }

    public function lap_barmas()
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $cek['title'] = 'Lap. Barang Masuk';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['lap'] = $this->db->get('lap_barmas')->result_array();
        $cek['lap2'] = $this->db->get('lap_barmas2')->result_array();
        $cek['lap3'] = $this->db->get('lap_barmas3')->result_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        if ($queryId['id_wilayah'] == 1) {
            $this->load->view('datagudang/v_lapbarmas', $cek);
        }
        if ($queryId['id_wilayah'] == 2) {
            $this->load->view('datagudang/v_lapbarmas2', $cek);
        }
        if ($queryId['id_wilayah'] == 3) {
            $this->load->view('datagudang/v_lapbarmas3', $cek);
        }
        $this->load->view('template/footer');
    }

    public function print_lap_barmas($id)
    {
        $cek['title'] = 'Print BA. Barang Masuk';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id' => $id);
        $cek['lap_barmas'] = $this->M_data->edit_data($where, 'lap_barmas')->result_array();

        $this->load->view('file_print/v_p_pengadaan', $cek);
    }

    public function print_lap_barmas2($id)
    {
        $cek['title'] = 'Print BA. Barang Masuk';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id' => $id);
        $cek['lap_barmas2'] = $this->M_data->edit_data($where, 'lap_barmas2')->result_array();

        $this->load->view('file_print/v_p_pengadaan2', $cek);
    }

    public function print_lap_barmas3($id)
    {
        $cek['title'] = 'Print BA. Barang Masuk';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('id' => $id);
        $cek['lap_barmas3'] = $this->M_data->edit_data($where, 'lap_barmas3')->result_array();

        $this->load->view('file_print/v_p_pengadaan3', $cek);
    }

    public function lap_barkel()
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $cek['title'] = 'Lap. Barang Keluar';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['lap'] = $this->db->get('lap_barkel')->result_array();
        $cek['lap2'] = $this->db->get('lap_barkel2')->result_array();
        $cek['lap3'] = $this->db->get('lap_barkel3')->result_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        if ($queryId['id_wilayah'] == 1) {
            $this->load->view('datagudang/v_lapbarkel', $cek);
        }
        if ($queryId['id_wilayah'] == 2) {
            $this->load->view('datagudang/v_lapbarkel2', $cek);
        }
        if ($queryId['id_wilayah'] == 3) {
            $this->load->view('datagudang/v_lapbarkel3', $cek);
        }
        $this->load->view('template/footer');
    }

    public function stok_gudang()
    {
        $cek['title'] = 'Stok Gudang';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['stok'] = $this->db->get('stok_gudang')->result_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        $this->load->view('datagudang/v_stokgudang', $cek);
        $this->load->view('template/footer');
    }

    public function data_material()
    {
        $cek['title'] = 'Data Material';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['waw'] = $this->db->get('user')->result_array();
        $cek['list'] = $this->db->get('list_pengajuan')->result_array();
        $cek['bar1'] = $this->db->get('material')->result_array();
        $cek['bar2'] = $this->db->get('tipe')->result_array();
        $cek['bar3'] = $this->db->get('satuan')->result_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        $this->load->view('datagudang/v_datamaterial', $cek);
        $this->load->view('template/footer');
    }

    public function material_baru()
    {
        $this->form_validation->set_rules('namamaterial', 'Material', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Data Material';
            $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $cek['waw'] = $this->db->get('user')->result_array();
            $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
            $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

            $this->load->view('template/header', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('template/topbarmin', $cek);
            $this->load->view('datagudang/v_datamaterial', $cek);
            $this->load->view('template/footer');
        } else {
            $datas = [
                'id_barang' => $this->M_datagudang->get_kobar(),
                'nama' => $this->input->post('namamaterial'),
                'tipe' => $this->input->post('tipe'),
                'satuan' => $this->input->post('satuan'),
                'jumlah' => 0
            ];

            $datal = [
                'id_barang' => $this->M_datagudang->get_kobar(),
                'nama' => $this->input->post('namamaterial'),
                'tipe' => $this->input->post('tipe'),
                'satuan' => $this->input->post('satuan'),
                'whjember' => 0,
                'soinvjemkotin' => 0,
                'soinvjemkotout' => 0,
                'soinvjember' => 0,
                'soinvtguin' => 0,
                'soinvtguout' => 0,
                'soinvgen' => 0,
                'soinvbwi' => 0,
                'soinvbws' => 0,
                'soinvsit' => 0,
            ];

            $this->db->insert('material', $datas);
            $this->db->insert('stok_gudang', $datal);
            $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil menambahkan Data</div>');
            redirect('data_gudang/data_material');
        }
    }

    function edit1($id)
    {
        $cek['title'] = 'Edit Material';
        $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $cek['waw'] = $this->db->get('user')->result_array();
        $cek['bar1'] = $this->db->get('material')->result_array();
        $cek['bar2'] = $this->db->get('tipe')->result_array();
        $cek['bar3'] = $this->db->get('satuan')->result_array();
        $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
        $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

        $where = array('id' => $id);
        $cek['bar1'] = $this->M_data->edit_data($where, 'material')->result_array();
        $this->load->view('template/header', $cek);
        $this->load->view('template/mainsidebar', $cek);
        $this->load->view('template/topbarmin', $cek);
        $this->load->view('datagudang/v_editmaterial', $cek);
        $this->load->view('template/footer');
    }

    function update1()
    {
        $id = $this->input->post('id_material');
        $nama = $this->input->post('nama');
        $tipe = $this->input->post('tipe');
        $satuan = $this->input->post('satuan');

        $data = array(
            'nama' => $nama,
            'tipe' => $tipe,
            'satuan' => $satuan,
        );

        $where = array(
            'id' => $id
        );

        $this->M_data->update_data($where, $data, 'material');
        $this->M_data->update_data($where, $data, 'stok_gudang');
        $this->session->set_flashdata('message', '<div class="alert col-sm-12 alert-success" role="alert">Berhasil mengubah data</div>');
        redirect('data_gudang/data_material');
    }

    public function hapus1($id)
    {
        $where = array('id_barang' => $id);
        $this->m_data->hapus_data($where, 'material');
        $this->session->set_flashdata('message', '<div class="alert col-sm-6 alert-success" role="alert">Berhasil menghapus data</div>');
        redirect('administrator/data_material');
    }

    public function tipe_baru()
    {
        $this->form_validation->set_rules('namatipe', 'Material', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Data Material';
            $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $cek['waw'] = $this->db->get('user')->result_array();
            $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
            $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

            $this->load->view('template/header', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('template/topbarmin', $cek);
            $this->load->view('datagudang/v_datamaterial', $cek);
            $this->load->view('template/footer');
        } else {
            $datar = [
                'tipe' => $this->input->post('namatipe')
            ];

            $this->db->insert('tipe', $datar);
            $this->session->set_flashdata('message1', '<div class="alert col-sm-10 alert-success" role="alert">Berhasil menambahkan Data</div>');
            redirect('data_gudang/data_material');
        }
    }

    public function hapus2($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'tipe');
        $this->session->set_flashdata('message1', '<div class="alert col-sm-10 alert-success" role="alert">Berhasil menghapus data</div>');
        redirect('data_gudang/data_material');
    }

    public function satuan_baru()
    {
        $this->form_validation->set_rules('namasatuan', 'Material', 'required|trim');

        if ($this->form_validation->run() == false) {
            $cek['title'] = 'Data Material';
            $cek['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $cek['waw'] = $this->db->get('user')->result_array();
            $cek['notifi'] = $this->db->get('notifikasi_manager')->result_array();
            $cek['notifi1'] = $this->db->get('notifikasi_manager')->num_rows();

            $this->load->view('template/header', $cek);
            $this->load->view('template/mainsidebar', $cek);
            $this->load->view('template/topbarmin', $cek);
            $this->load->view('datagudang/v_datamaterial', $cek);
            $this->load->view('template/footer');
        } else {
            $datam = [
                'satuan' => $this->input->post('namasatuan')
            ];

            $this->db->insert('satuan', $datam);
            $this->session->set_flashdata('message2', '<div class="alert col-sm-10 alert-success" role="alert">Berhasil menambahkan Data</div>');
            redirect('data_gudang/data_material');
        }
    }

    public function hapus3($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'satuan');
        $this->session->set_flashdata('message2', '<div class="alert col-sm-10 alert-success" role="alert">Berhasil menghapus data</div>');
        redirect('data_gudang/data_material');
    }
}
