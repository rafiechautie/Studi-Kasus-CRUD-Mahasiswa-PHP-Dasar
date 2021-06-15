<?php

require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";
require_once __DIR__ . "/../View/viewDeleteDataMahasiswa.php";
require_once __DIR__ . "/../Model/dataMahasiswa.php";

addDataMahasiswa("1234", "Nindy", "Teknik Pangan");
addDataMahasiswa("5432", "Rinnie", "Pendidikan MTK");

showDataMahasiswa();
viewDeleteDataMahasiswa();
showDataMahasiswa();
