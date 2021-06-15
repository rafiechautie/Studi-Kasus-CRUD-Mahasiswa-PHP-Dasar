<?php

require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../Model/dataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";

addDataMahasiswa("1234", "Nindy", "Teknik Pangan");
addDataMahasiswa("5432", "Rinnie", "Pendidikan MTK");

showDataMahasiswa();
