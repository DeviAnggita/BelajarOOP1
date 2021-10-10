<?php
require('PegawaiPensiun.php');

//Contoh Opsi1
$PegawaiC = new pegawaiPensiun(); 
$PegawaiC->isiData("V3420028","Devi Anggita Ambarwati","Direktur Marketing",2002,"Wanita","Bali");


//Contoh Opsi2
$PegawaiD = new pegawaiPensiun("V3420050","Rahayu Setyowati", "Executive Marketing",1980,"Wanita","Jakarta");
$PegawaiD ->beriStatusPegawai("Pensiun");


$PegawaiC->cetakData();
$PegawaiD->cetakData();