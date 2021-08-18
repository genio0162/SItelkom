<?php

class M_grafik extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function get_bulan()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barmas");
        return $hsl;
    }
    function get_bulan21()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barmas2");
        return $hsl;
    }
    function get_bulan31()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barmas3");
        return $hsl;
    }
    function get_bulan2()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barkel");
        return $hsl;
    }
    function get_bulan22()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barkel2");
        return $hsl;
    }
    function get_bulan32()
    {
        $hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM lap_barkel3");
        return $hsl;
    }

    public function graph($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barmas WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function graph21($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barmas2 WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function graph31($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barmas3 WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function graph2($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barkel WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function graph22($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barkel2 WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function graph32($bulan)
    {
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal,'%d') AS tgl,SUM(graf) total FROM lap_barkel3 WHERE DATE_FORMAT(tanggal,'%M %Y')='$bulan' GROUP BY DAY(tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
