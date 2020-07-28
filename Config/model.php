<?php

  require_once "config.php";

class Model {

  public function conectar()
  {
    $enlace = new PDO(SGBD, USER, PASS);

    return $enlace;
  }

  public function ejecutar_consulta_simple($consulta)
  {

    $respuesta = Model::conectar()->prepare($consulta);
    $respuesta->execute();

    return $respuesta;
  }
  
  public function limpiar_rut($variable)
  {
    $variable = str_ireplace(".", "", $variable);
    $variable = str_ireplace("-", "", $variable);
    return $variable;
  }

  public function limpiar_cadena($cadena)
  {
    /*trim elimina los espacios del string*/
    $cadena = trim($cadena);

    /*stripslashes elimina barras invertidas*/
    $cadena = stripslashes($cadena);

    /*str_ireplace reemplaza lo primero por lo segundo en lo tercero*/
    $cadena = str_ireplace(".<script>", "", $cadena);
    $cadena = str_ireplace(".</script>", "", $cadena);
    $cadena = str_ireplace(".<script src", "", $cadena);
    $cadena = str_ireplace(".<script type=", "", $cadena);
    $cadena = str_ireplace("SELECT * FROM", "", $cadena);
    $cadena = str_ireplace("DELETE FROM", "", $cadena);
    $cadena = str_ireplace("INSERT INTO", "", $cadena);
    $cadena = str_ireplace("OR", "", $cadena);
    $cadena = str_ireplace("AND", "", $cadena);
    $cadena = str_ireplace("--", "", $cadena);
    $cadena = str_ireplace("^", "", $cadena);
    $cadena = str_ireplace("[", "", $cadena);
    $cadena = str_ireplace("]", "", $cadena);
    $cadena = str_ireplace("==", "", $cadena);
    $cadena = str_ireplace("===", "", $cadena);
    $cadena = str_ireplace(";", "", $cadena);

    return  $cadena;
  }

  public function verificar_rut($string)
  {
    $largo = strlen($string) - 1;
    $arr1 = str_split($string);
    $verificador = $arr1[$largo];

    for ($i = 1; $i <= $largo; $i++) {
      $giro[$i - 1] = $arr1[$largo - $i];
    }

    for ($i = 0; $i < $largo; $i++) {
      if ($i == 0) {
        $mul = 2;
        $sum1 = 0;
      } else {
        if ($mul == 7) {
          $mul = 2;
        } else {
          $mul = $mul + 1;
        }
      }
      $sum1 = ($giro[$i] * $mul) + $sum1;
    }
    $sum2 = intval($sum1 / 11);
    $sum2 = $sum2 * 11;
    $div = abs($sum1 - $sum2);
    $Sverificador = 11 - $div;
    if ($Sverificador == $verificador) {
      $cadena = "TRUE";
    } else {
      if ($Sverificador == 11 && $verificador == 0) {
        $cadena = "TRUE";
      } else {
        if ($Sverificador == 10 && ($verificador == 'k' || $verificador == 'K')) {
          $cadena = "TRUE";
        } else {
          $cadena = "FALSE";
        }
      }
    }
    return $cadena;
  }
}