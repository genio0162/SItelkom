<?php

class M_transaksi extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('data_struk', $data);
    }
    function get_barang($kobar)
    {
        $hsl = $this->db->query("SELECT * FROM stok_gudang where id_barang = '$kobar' ");
        return $hsl;
    }

    public function tambah_stok($data)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $qty = $data['qty'];
        $id = $data['id_barang'];

        if ($queryId['id_wilayah'] == 1) {
            $sql = "UPDATE stok_gudang SET whjember = whjember + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id_wilayah'] == 2) {
            $sql = "UPDATE stok_gudang SET soinvjemkotin = soinvjemkotin + '$qty' WHERE id_barang = '$id'";
        }
        if ($queryId['id_wilayah'] == 3) {
            $sql = "UPDATE stok_gudang SET soinvjemkotout = soinvjemkotout + '$qty' WHERE id_barang = '$id'";
        }

        $this->db->query($sql);
    }

    public function tambah_stok_pengadaan($data, $id)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        $qty = $data['jumlah'];
        $nama = $data['tipe'];

        if ($queryId['id_wilayah'] == 1) {

            $data = array(
                'statusin' => 3
            );

            $where = array(
                'id' => $id
            );

            $this->M_data->update_data($where, $data, 'list_pengajuan');
            $sql = "UPDATE stok_gudang SET whjember = whjember + '$qty' WHERE nama = '$nama'";
        }
        if ($queryId['id_wilayah'] == 2) {

            $data = array(
                'statusin' => 3
            );

            $where = array(
                'id' => $id
            );

            $this->M_data->update_data($where, $data, 'list_pengajuan');
            $sql = "UPDATE stok_gudang SET soinvjemkotin = soinvjemkotin + '$qty' WHERE nama = '$nama'";
        }
        if ($queryId['id_wilayah'] == 3) {

            $data = array(
                'statusin' => 3
            );

            $where = array(
                'id' => $id
            );

            $this->M_data->update_data($where, $data, 'list_pengajuan');
            $sql = "UPDATE stok_gudang SET soinvjemkotout = soinvjemkotout + '$qty' WHERE nama = '$nama'";
        }

        $this->db->query($sql);
    }

    public function lap_barmas($post)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        if ($queryId['id_wilayah'] == 1) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'tipe' => $post['jenis'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['qty'],
                'pengirim' => $post['pengirim'],
                'keterangan' => $post['item_name'],
                'graf' => 1
            ];
            $this->db->insert('lap_barmas', $param);
        }
        if ($queryId['id_wilayah'] == 2) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'tipe' => $post['jenis'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['qty'],
                'pengirim' => $post['pengirim'],
                'keterangan' => $post['item_name'],
                'graf' => 1
            ];
            $this->db->insert('lap_barmas2', $param);
        }
        if ($queryId['id_wilayah'] == 3) {
            $param = [
                'tanggal' => $post['date'],
                'id_barang' => $post['id_barang'],
                'nama' => $post['nama'],
                'tipe' => $post['jenis'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['qty'],
                'pengirim' => $post['pengirim'],
                'keterangan' => $post['item_name'],
                'graf' => 1
            ];
            $this->db->insert('lap_barmas3', $param);
        }
    }

    public function lap_barmas_pengajuan($post)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        if ($queryId['id_wilayah'] == 1) {
            $param = [
                'tanggal' => $post['date'],

                'nama' => $post['tipe'],
                'tipe' => $post['namatipe'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['jumlah'],
                'pengirim' => 'Vendor',
                'keterangan' => 'Pengadaan',
                'graf' => 1
            ];
            $this->db->insert('lap_barmas', $param);
        }
        if ($queryId['id_wilayah'] == 2) {
            $param = [
                'tanggal' => $post['date'],

                'nama' => $post['tipe'],
                'tipe' => $post['namatipe'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['jumlah'],
                'pengirim' => 'Vendor',
                'keterangan' => 'Pengadaan',
                'graf' => 1
            ];
            $this->db->insert('lap_barmas2', $param);
        }
        if ($queryId['id_wilayah'] == 3) {
            $param = [
                'tanggal' => $post['date'],

                'nama' => $post['tipe'],
                'tipe' => $post['namatipe'],
                'satuan' => $post['satuan'],
                'jumlah' => $post['jumlah'],
                'pengirim' => 'Vendor',
                'keterangan' => 'Pengadaan',
                'graf' => 1
            ];
            $this->db->insert('lap_barmas3', $param);
        }
    }
}
