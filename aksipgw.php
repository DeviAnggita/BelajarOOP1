<?php
require('Pegawai.php');

//Contoh Opsi1
$PegawaiA = new Pegawai() ; 
$PegawaiA->isiData("V3420028","Devi Anggita Ambarwati","Direktur Marketing",1990,"Wanita","Bali");


//Contoh Opsi2
$PegawaiB = new Pegawai("V3420029","Adi Saputra", "Executive Marketing",1995,"Pria","Jakarta");


$PegawaiA->cetakData();
$PegawaiB->cetakData();

