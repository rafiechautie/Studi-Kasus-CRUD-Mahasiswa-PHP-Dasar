<?php
require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";
require_once __DIR__ . "/../View/viewUpdateDataMahasiswa.php";

addDataMahasiswa("1234", "Nindy", "Teknik Pangan");
addDataMahasiswa("5432", "Rinnie", "Pendidikan MTK");

showDataMahasiswa();

updateDataMahasiswa(1);
showDataMahasiswa();
