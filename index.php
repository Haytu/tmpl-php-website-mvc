<?php
    session_start();
    $d_s = DIRECTORY_SEPARATOR;
    require_once(__DIR__ . $d_s . "lib" . $d_s . "file.php");
    require_once(File::build_path(array("controller", "routeur.php")));
