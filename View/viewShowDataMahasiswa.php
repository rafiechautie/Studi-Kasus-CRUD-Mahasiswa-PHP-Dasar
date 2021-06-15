<?php
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/viewAddDataMahasiswa.php";
require_once __DIR__ . "/../View/viewUpdateDataMahasiswa.php";
require_once __DIR__ . "/../View/viewDeleteDataMahasiswa.php";


function viewShowDataMahasiswa()
{
    global $dataMahasiswa;
    while (true) {
        if (sizeof($dataMahasiswa) == 0) {
            echo "DATA KOSONG" . PHP_EOL;
        } else {
            showDataMahasiswa();
        }

        echo "1. Tambah Data Mahasiswa" . PHP_EOL;
        echo "2. Update Data Mahasiswa" . PHP_EOL;
        echo "3. Delete Data Mahasiswa" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Masukkan Pilihanmu: ");
        if ($pilihan == "1") {
            viewAddDataMahasiswa();
        } else if ($pilihan == "2") {
            viewUpdateDataMahasiswa();
        } else if ($pilihan == "3") {
            viewDeleteDataMahasiswa();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimenegerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
