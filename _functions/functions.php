<?php

/**
 * Permet de sécuriser une chaîne de caracètres
 * @param $string
 * @return string
 */
function str_secur($string) {
   return trim(htmlspecialchars($string));
}

/**
 * Permet de sécuriser une chaîne de caracètres
 * @param $var
 */
function debug($var){
   echo '<pre>';
      var_dump($var);
   echo '</pre>';
}