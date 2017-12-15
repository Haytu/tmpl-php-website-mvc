<?php
require_once(File::build_path(array("model", "model.php")));

class modelTypes{
  /** ATTRIBUTS **/
  private $nomType;
  /*private $something;*/

  /** CONSTRUCTEUR **/
  public function __construct($nom = NULL/*, $something = NULL*/){
    if(!is_null($nom)/* && !is_null($something)*/){
      $this->nomType = $nom;
      /*$this->something = $something;*/
    }
  }

  /** GETTERS **/
  public function getNomType(){
    return $this->$nomType;
  }

  /*public function getSomething(){
  return $this->something;
  }*/

  /** SETTERS **/
  public function setNomType($nom){
    $this->nomType = $nom;
  }

  /*public function setSomething($something){
  $this->something = $something;
  }*/

  /** METHODES **/
  public function readAll(){
    $sql = "SELECT * FROM types";
    $rep = model::$pdo->query($sql);
    $rep->setFetchMode(PDO::FETCH_CLASS, 'modelTypes');
    return $rep->fetchAll();
  }

  public function create(){
    $sql = "INSERT INTO types(idType, nomType) VALUES (:idT, :nomT)";
    $req_prep = model::$pdo->prepare($sql);
    $values = array("idT" => NULL, "nomT" => $this->nomType);
    $req_prep->execute($values);
  }

  public function read($idType){
      $sql = "SELECT * FROM types WHERE idType = :idT";
      $req_prep = model::$pdo->prepare($sql);
      $values = array("idT" => $idT);
      $req_prep->execute($values);
      $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelTypes');
      $tabTypes = $req_prep->fetchAll();

      if(empty($tabTypes)){
        return false;
      }
      else{
        return $tabTypes[0];
      }
  }

  public function update(){
    $sql = 'UPDATE types SET nomType = :nomT';
    $req_prep = model::$pdo->prepare($sql);
    $values = array("nomT" => $this->nomType);
    $req_prep->execute($values);
  }

  public function delete(){
    $sql = "DELETE FROM types WHERE nomType = :nomT";
    $req_prep = model::$pdo->prepare($sql);
    $values = array("nomT" => $this->nomType);
    $req_prep->execute($values);
  }
}
