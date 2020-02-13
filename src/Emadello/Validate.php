<?php

namespace Emadello;

class Validate {

  public function __construct() {
  }

  public function isNumeric($id) {
    if (!\is_numeric($id)) return false;
    return true;
  }

  public function isValidName($name) {
    if (!$name || $name === '' || strlen($name) < 3) return false;
    return true;
  }

  public function isValidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
    return true;
  }

  public function isValidPhone($phone) {
    if (!$phone || $phone === '' || strlen($phone) < 10) return false;
    return true;
  }

  public function isValidTextLength($text) {
    if (!$text || $text === '' || strlen($text) < 4) return false;
    return true;
  }

  public function passwordMismatch($password, $cpassword) {

    if ($password !== $cpassword) {
      return true;
    } else {
      return false;
    }

  }

}

?>
