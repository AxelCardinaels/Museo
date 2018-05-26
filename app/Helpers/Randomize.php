<?php
namespace App\Helpers;
use Auth;

class Randomize{
  public static function generateRandomString($length, $type) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);

      if($type == "lien"){
        $randomString = Auth::User()->id.'-';
      }else{
        $randomString = '';
      }

      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

}
