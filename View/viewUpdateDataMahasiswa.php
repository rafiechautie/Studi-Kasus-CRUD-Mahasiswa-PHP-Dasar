<?php

require_once __DIR__ . "/../Model/dataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/updateDataMahasiswa.php";

function viewUpdateDataMahasiswa()
{
    echo "HALAMAN UPDATE DATA MAHASISWA" . PHP_EOL;
    $pilihan = input("Masukkan Nomor yang Ingin Di Update (press x to cancel)");

    if ($pilihan == "x") {
        echo "Batal Mengupdate Data Mahasiswa" . PHP_EOL;
    } else {
        updateDataMahasiswa($pilihan);
    }
}
