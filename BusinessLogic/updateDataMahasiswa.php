<?php

require_once __DIR__ . "/../Helper/Input.php";
// require_once __DIR__ . "/../Model/dataMahasiswa.php";

function updateDataMahasiswa(int $number)
{
    global $dataMahasiswa;

    while (true) {

        echo "Bagian Mana Yang Ingin Diupdate? " . PHP_EOL;
        echo "1. nim" . PHP_EOL;
        echo "2. nama" . PHP_EOL;
        echo "3. Jurusan" . PHP_EOL;
        echo "x (keluar)" . PHP_EOL;

        $pilihan = input("Pilih Bagian yang Ingin DiUpdate: ");
        if ($pilihan == "1") {
            $dataMahasiswaUpdate = input("Masukkan nim yang baru: ");
            $dataMahasiswa[$number - 1]["nim"] = $dataMahasiswaUpdate;
        } else if ($pilihan == "2") {
            $dataMahasiswaUpdate = input("Masukkan Nama Yang Baru: ");
            $dataMahasiswa[$number - 1]["nama"] = $dataMahasiswaUpdate;
        } else if ($pilihan == "3") {
            $dataMahasiswaUpdate = input("Masukkan Jurusan Yang baru: ");
            $dataMahasiswa[$number - 1]["jurusan"] = $dataMahasiswaUpdate;
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak Dimengerti" . PHP_EOL;
        }
    }
}
