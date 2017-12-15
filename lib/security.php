<?php
class security{
  private static $seed = '';

  static public function getSeed(){
    return self::$seed;
  }

  function chiffrer($texte_en_clair){
    $texte_clairSeed = $texte_en_clair . self::getSeed();
    $texte_chiffre = hash('sha256', $texte_clairSeed);
    return $texte_chiffre;
  }

  function generateRandomHex() {
    $numbytes = 16;
    $bytes = openssl_random_pseudo_bytes($numbytes);
    $hex   = bin2hex($bytes);
    return $hex;
  }
}
