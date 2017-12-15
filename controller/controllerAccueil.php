<?php
class controllerAccueil{
  public static function readAll(){
    $pageTitle = "Accueil";
    require(File::build_path(array("view", "navbar.php")));
    require(File::build_path(array("view/accueil", "accueil.php")));
    require(File::build_path(array("view", "footer.php")));
  }
}
