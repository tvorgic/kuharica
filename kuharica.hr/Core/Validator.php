<?php

class Validator
{
  public static function string($value, $min = 1, $max = INF)
  {
    $value = trim($value);

    return strlen($value) >= $min && strlen($value) <= $max;
  }

  /*   EMAIL METHOD FOR LATER
  public static function email()
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  */
}