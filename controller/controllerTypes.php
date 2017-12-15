<?php
require_once(File::build_path(array("model", "modelTypes.php")));
require_once(File::build_path(array("lib", "session.php")));

class controllerTypes{
  /* Récupérer la liste des types */
  public static function readAll(){
    $pageTitle = "Tous les types";
    $tab_t = modelTypes::getAllTypes();
    require (File::build_path(array("view", "navbar.php")));
    require	(File::build_path(array("view", "types", "tousLesTypes.php")));
    require (File::build_path(array("view", "footer.php")));
  }

  public static function add(){
    $pageTitle = "...";
    if(isset($_POST['type'])){
      $nomType = htmlspecialchars($_POST['type']);
      $ajoutType = new modelTypes($nomType);
      $ajoutType->create();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la création du type");
    }
  }

  public static function update(){
    $pageTitle = "...";
    if(isset($_POST['type'])){
      $nomType = htmlspecialchars($_POST['type']);
      $modifieType = new modelTypes($nomType);
      $modifieType->update();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la modification du type");
    }
  }

  public static function delete(){
    $pageTitle = "...";
    if(isset($_POST['type'])){
      $nomType = htmlspecialchars($_POST['type']);
      $supprimeType = new modelTypes($nomType);
      $supprimeType->delete();
      require (File::build_path(array("view", "navbar.php")));
      /* require	(File::build_path(array("view", "types", "nomDeLaVue.php"))); */
      require (File::build_path(array("view", "footer.php")));
    }
    else{
      controllerErreur::erreur("Problème dans la suppression du type");
    }
  }

  /* Action reservée pour un administrateur */
  public static function something(){
    if(session::is_admin()){
      $pageTitle = "...";
    }
    else{
      controllerErreur::erreur("Action non autorisée pour un client");
    }
  }
}
