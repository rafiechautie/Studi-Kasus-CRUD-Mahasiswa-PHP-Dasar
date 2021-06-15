<?php

require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/dataMahasiswa.php";

function viewAddDataMahasiswa()
{
    echo "HALAMAN TAMBAH DATA MAHASISWA" . PHP_EOL;
    echo "1. Tambah Data Mahasiswa" . PHP_EOL;
    echo "x (Batal Menambahkan)" . PHP_EOL;

    $pilihan = input("Masukkan Pilihanmu");

    if ($pilihan == "1") {
        $addDataMahasiswaNim = input("Masukkan NIM: ");
        $addDataMahasiswaNama = input("Masukkan Nama: ");
        $addDataMahasiswaJurusan = input("Masukkan Jurusan: ");

        addDataMahasiswa($addDataMahasiswaNim, $addDataMahasiswaNama, $addDataMahasiswaJurusan);
    } else if ($pilihan == "x") {
        echo "Batal Menambahkan Data Mahasiswa" . PHP_EOL;
    } else {
        echo "Pilihan Tidak Dimengerti" . PHP_EOL;
    }
}
