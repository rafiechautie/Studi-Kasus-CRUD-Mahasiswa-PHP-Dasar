<?php

function deleteDataMahasiswa(int $number): bool
{
    global $dataMahasiswa;

    if ($number > sizeof($dataMahasiswa) || $number <= 0) {
        return false;
    }

    for ($i = $number; $i < sizeof($dataMahasiswa); $i++) {
        $dataMahasiswa[$i - 1] = $dataMahasiswa[$i];
    }

    unset($dataMahasiswa[(sizeof($dataMahasiswa) - 1)]);

    return true;
}
