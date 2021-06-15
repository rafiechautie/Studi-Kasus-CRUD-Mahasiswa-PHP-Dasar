<?php

function addDataMahasiswa(string $nim, string $nama, string $jurusan)
{
    global $dataMahasiswa;

    $number = sizeof($dataMahasiswa) + 1;

    $dataMahasiswa[$number - 1]["nim"] = $nim;
    $dataMahasiswa[$number - 1]["nama"] = $nama;
    $dataMahasiswa[$number - 1]["jurusan"] = $jurusan;
}
