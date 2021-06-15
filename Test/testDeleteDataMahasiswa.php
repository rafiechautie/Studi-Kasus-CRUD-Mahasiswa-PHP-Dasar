<?php

require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/deleteDataMahasiswa.php";
require_once __DIR__ . "/../Model/dataMahasiswa.php";


addDataMahasiswa("123", "rafie", "sistem informasi");
addDataMahasiswa("321", "nindy", "teknik pangan");
addDataMahasiswa("567", "rinni", "matematika");

showDataMahasiswa();

var_dump(deleteDataMahasiswa(2));

showDataMahasiswa();
