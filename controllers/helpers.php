<?php 

/**
 * @DESC-- This function prints array and kills the page
 * params Array 
 * return void
 */
function printData($data){
  echo "<pre>";
  print_r($data);
  die();
}

/**
 * @Desc  
 */
function sanitize($data,$case = null){
  $result = trim($data);
  $result = htmlspecialchars($result);
  if($case == "lower"){
    $result = strtolower($result);
  }else if($case == "upper"){
    $result = strtoupper($result);
  }
  return $result;

}