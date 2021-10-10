<?php
Class Pegawai{
    protected $id;
    var $nama;
    var $jabatan;
    var $tahun;
    var $gender;
    var $kota;

    //method dipanggil ketika object di create(new)
    public function __construct($id="V3420028",$nama="Devi",$jabatan="Direktur",$tahun=1980,$gender="Wanita", $kota="Bali")
    {
        $this-> id = $id;
        $this-> nama = $nama;
        $this-> jabatan = $jabatan;
        $this-> tahun = $tahun;
        $this-> gender = $gender;
        $this-> kota = $kota;
    }
       
    public function isiData($id,$nama,$jabatan_pekerjaan, $tahun_lahir, $gender, $kota_tinggal){
        $this-> id = $id;
        $this-> nama = $nama;
        $this-> jabatan = $jabatan_pekerjaan;
        $this-> tahun = $tahun_lahir;
        $this-> gender = $gender;
        $this-> kota = $kota_tinggal;
    }

    public function cetakData() {
        echo "-----------------------------------------------------" ."</br>";
        echo "Id Pegawai :".$this->id."</br>" ;
        echo "Nama Pegawai :".$this->nama."</br>" ;
        echo "Jabatan Pegawai :".$this->jabatan."</br>" ;
        echo "Tahun Pegawai :".$this->tahun."</br>" ;
        echo "Gender Pegawai :".$this->gender."</br>" ;
        echo "Umur Pegawai :".$this->hitungUmur()."</br>" ;
        echo "-----------------------------------------------------" ."</br>";
    }

    //method void java menggunakan java 
    //method non void 
    //untuk membedakan method void dan non void di php dengan adanya return atau tidak 

    protected function hitungumur()
    {
        $umur= date('Y')-$this -> tahun;
        return $umur;
    }

    

}   