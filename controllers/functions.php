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


function selectMultipleData($tableName,$colums = "*", $where = "",$orderBy = "",$order = "DESC",$limit = ''){
  global $conn;
  $where = !empty($where) ? " WHERE ".$where : $where;
  $orderBy = !empty($orderBy) ? " ORDER BY ".$orderBy." $order" : $orderBy;
  $sql = "SELECT $colums FROM $tableName $where  $orderBy $limit";
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



/**
 * @desc This function is used to radd a [post]
 */
function addPost($data)
{
    extract($data);
    global $conn;
    $sql = "INSERT INTO article(`title`,`content`,`image`,`user_id`) VALUES('$title','$content','$image','$user_id')";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

  
  /**
 * @desc This function is used to radd a [post]
 */
function updatePost($data)
{
  extract($data);
  global $conn;
   $sql = "UPDATE article SET `title` = '$title' , `content`='$content' , `image` = '$image' WHERE `id`='$id'";
   $result = $conn->query($sql);
   if($result){
    return true;
  }else{
    return false;
  }
}




 
 
