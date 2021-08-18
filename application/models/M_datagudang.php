<?php

class M_datagudang extends CI_Model
{

    function get_kobar()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_barang,6)) AS kd_max FROM material");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return "BR" . $kd;
    }
}
