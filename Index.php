<?php

require_once __DIR__ . "/View/viewShowDataMahasiswa.php";
require_once __DIR__ . "/Model/dataMahasiswa.php";
require_once __DIR__ . "/View/viewAddDataMahasiswa.php";
require_once __DIR__ . "/View/viewUpdateDataMahasiswa.php";
require_once __DIR__ . "/View/viewDeleteDataMahasiswa.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/BusinessLogic/addDataMahasiswa.php";
require_once __DIR__ . "/BusinessLogic/deleteDataMahasiswa.php";
require_once __DIR__ . "/BusinessLogic/showDataMahasiswa.php";
require_once __DIR__ . "/BusinessLogic/updateDataMahasiswa.php";


echo "Aplikasi CRUD Mahasiswa PHP DASAR Berbasis Command Line" . PHP_EOL;

viewShowDataMahasiswa();
