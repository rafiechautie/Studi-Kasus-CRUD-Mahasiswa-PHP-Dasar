<?php

require_once __DIR__ . "/../BusinessLogic/updateDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/../BusinessLogic/showDataMahasiswa.php";


addDataMahasiswa("123", "rafie", "sistem informasi");
addDataMahasiswa("321", "nindy", "teknik pangan");
addDataMahasiswa("567", "rinni", "matematika");
showDataMahasiswa();

updateDataMahasiswa(1);

showDataMahasiswa();
