<?php

/**
 * functon untuk menampilkan daftar mahasiswa
 */

function showDataMahasiswa()
{
    global $dataMahasiswa;

    echo "Daftar Mahasiswa UNIVERSITAS SRIWIJAYA" . PHP_EOL;
    echo "no\t\tnim\t\t\t\tNama\t\t\t\t\t\tjurusan" . PHP_EOL;

    foreach ($dataMahasiswa as $key => $values) {
        echo ($key + 1) . "\t\t";
        echo $values["nim"] . "\t\t\t";
        echo $values["nama"] . "\t\t\t\t";
        echo $values["jurusan"] . PHP_EOL;
    }
}
