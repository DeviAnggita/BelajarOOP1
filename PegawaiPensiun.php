<?php
require('Pegawai.php'); //mengambil data dari pegawai.php

Class PegawaiPensiun extends Pegawai{

    var $StatusPegawai; //hanya milik PegawaiPensiun.php

    //method dipanggil ketika object di create(new)
    public function __construct($id="V3420028",$nama="Devi",$jabatan="Direktur",$tahun=2002,$gender="Wanita", $kota="Bali")
    {
        parent :: __construct($id,$nama,$jabatan,$tahun,$gender,$kota);
        $this->StatusPegawai="Aktif";
    }
       
    final public function beriStatusPegawai($StatusPegawai){
        $this-> StatusPegawai=$StatusPegawai ;
    }

    //Method diperbaharui dari method file mahasiswa.php
    public function cetakData() {
        echo "-----------------------------------------------------" ."</br>";
        echo "Id Pegawai :".$this->id."</br>" ;
        echo "Nama Pegawai :".$this->nama."</br>" ;
        echo "Jabatan Pegawai :".$this->jabatan."</br>" ;
        echo "Tahun Pegawai :".$this->tahun."</br>" ;
        echo "Gender Pegawai :".$this->gender."</br>" ;
        echo "Umur Pegawai :".$this->hitungUmur()."</br>" ;
        echo "Status Pegawai :".$this->StatusPegawai."</br>" ;
        echo "-----------------------------------------------------"."</br>" ;
    }
}   