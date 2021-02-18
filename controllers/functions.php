<?php 

/**
 * @desc This function is used to register a user
 */
function registerUser($data){
  extract($data);
  global $conn;
  $sql = "INSERT INTO users(`firstname`,`lastname`,`email`,`password`) VALUES('$firstname','$lastname','$email','$password')";
  $result = $conn->query($sql);
  if($result){
    return true;
  }else{
    return false;
  }

}


function selectSingleData($tableName,$colums = "*",$where = ""){
  global $conn;
  $where = !empty($where) ? " WHERE ".$where : $where;
  
  $sql = "SELECT $colums FROM $tableName $where";

  $result = $conn->query($sql);
  if($result->num_rows > 0){
    $data = $result->fetch_assoc();
    return $data;
  }else{
    return [];
  }
}


function selectMultipleData($tableName,$colums = "*", $where = ""){
  global $conn;
  $where = !empty($where) ? " WHERE ".$where : $where;
  $sql = "SELECT $colums FROM $tableName $where";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    $data = [];
    while($row = $result->fetch_assoc()){
      $data[] = (object) $row;
    }
    return $data;
  }else{
    return [];
  }
}