<?php

class M_bon extends CI_Model
{

    public function kurang($nofrak)
    {
        $ci = get_instance();
        $idd = $ci->session->userdata('username');
        $queryId = $ci->db->get_where('user', ['username' => $idd])->row_array();

        if ($queryId['id_wilayah'] == 1) {
            foreach ($this->cart->contents() as $item) {
                $data = array(
                    'nofrak' => $nofrak,
                    'tanggal'  =>    $item['tanggal'],
                    'id_barang'  =>    $item['id'],
                    'namatek'  =>    $item['namak'],
                    'nama'       =>    $item['name'],
                    'tipe'       =>    $item['price'],
                    'satuan'       =>    $item['satuan'],
                    'jumlah'     =>    $item['qty'],
                    'keterangan'     =>    $item['keterangan'],
                    'graf' => 1
                );

                $this->db->insert('lap_barkel', $data);
                $this->db->query("update stok_gudang set whjember = whjember-'$item[qty]' where id_barang = '$item[id]'");
            }
        }
        if ($queryId['id_wilayah'] == 2) {
            foreach ($this->cart->contents() as $item) {
                $data = array(
                    'nofrak' => $nofrak,
                    'tanggal'  =>    $item['tanggal'],
                    'id_barang'  =>    $item['id'],
                    'namatek'  =>    $item['namak'],
                    'nama'       =>    $item['name'],
                    'tipe'       =>    $item['price'],
                    'satuan'       =>    $item['satuan'],
                    'jumlah'     =>    $item['qty'],
                    'keterangan'     =>    $item['keterangan'],
                    'graf' => 1
                );

                $this->db->insert('lap_barkel2', $data);
                $this->db->query("update stok_gudang set soinvjemkotin = soinvjemkotin-'$item[qty]' where id_barang = '$item[id]'");
            }
        }
        if ($queryId['id_wilayah'] == 3) {
            foreach ($this->cart->contents() as $item) {
                $data = array(
                    'nofrak' => $nofrak,
                    'tanggal'  =>    $item['tanggal'],
                    'id_barang'  =>    $item['id'],
                    'namatek'  =>    $item['namak'],
                    'nama'       =>    $item['name'],
                    'tipe'       =>    $item['price'],
                    'satuan'       =>    $item['satuan'],
                    'jumlah'     =>    $item['qty'],
                    'keterangan'     =>    $item['keterangan'],
                    'graf' => 1
                );

                $this->db->insert('lap_barkel3', $data);
                $this->db->query("update stok_gudang set soinvjemkotout = soinvjemkotout-'$item[qty]' where id_barang = '$item[id]'");
            }
        }
    }

    public function lap($post)
    {
        $datas = array(
            'tanggal'  =>    $post('date'),
            'keterangan' =>    $post('keterangan')
        );

        $this->db->insert('lap_barkel', $datas);
    }

    function get_nofrak()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(nofrak,6)) AS kd_max FROM lap_barkel WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return date('dmy') . $kd;
    }

    function get_nofrak2()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(nofrak,6)) AS kd_max FROM lap_barkel2 WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return date('dmy') . $kd;
    }

    function get_nofrak3()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(nofrak,6)) AS kd_max FROM lap_barkel3 WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return date('dmy') . $kd;
    }

    function cetak_pengeluaran($no)
    {
        $query = $this->db->query("SELECT nofrak, nama as hasil FROM lap_barkel WHERE nofrak='$no'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hsl[] = $data;
            }
            return $hsl;
        }
    }

    function cetak_pengeluaran2($no)
    {
        $query = $this->db->query("SELECT nofrak, nama as hasil FROM lap_barkel2 WHERE nofrak='$no'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hsl[] = $data;
            }
            return $hsl;
        }
    }

    function cetak_pengeluaran3($no)
    {
        $query = $this->db->query("SELECT nofrak, nama as hasil FROM lap_barkel3 WHERE nofrak='$no'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hsl[] = $data;
            }
            return $hsl;
        }
    }
}
