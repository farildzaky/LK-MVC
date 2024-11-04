<?php

class daftarBarang extends Model{
    private $daftar = [];
    private $db = null;

    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql','localhost','root','','mvcapp');
    }

    public function getDataAll() {
        return $this->daftar;
    }
}