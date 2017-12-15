<?php
class file{
  public static function build_path($path_array){
    $d_s = DIRECTORY_SEPARATOR;
    $ROOT_FOLDER = __DIR__ . "/..";
    return $ROOT_FOLDER . $d_s . join($d_s, $path_array);
  }
}
