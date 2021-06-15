<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/deleteDataMahasiswa.php";

function viewDeleteDataMahasiswa()
{
    echo "HALAMAN REMOVE DATA MAHASISWA" . PHP_EOL;

    $pilihan = input("Masukkan Nomor Yang Ingin Dihapus (press x to cancel): ");
    if ($pilihan == "x") {
        echo "Batal Menghapus Data Mahasiswa" . PHP_EOL;
    } else {
        $success = deleteDataMahasiswa($pilihan);

        if ($success) {
            echo "Sukses Menghapus Data Mahasiswa Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Data Mahasiswa Nomor $pilihan" . PHP_EOL;
        }
    }
}
