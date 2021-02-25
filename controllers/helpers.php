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
  $result = htmlentities($result,ENT_QUOTES);
  if($case == "lower"){
    $result = strtolower($result);
  }else if($case == "upper"){
    $result = strtoupper($result);
  }
  return $result;

}


/**
 * This function is used to upload an image
 */

function uploadImage($imageFile){
  
  $imageName = $imageFile["name"];
  $imageType = $imageFile["type"];
  $imageTempLocation = $imageFile["tmp_name"];
  $imageError = $imageFile["error"];
  $imageSize = $imageFile["size"];
  $splitName = explode(".",$imageName);
  $imageExtension = strtolower(end($splitName));
  $supportedFormats = ["jpg","png","gif","jpeg","svg"];


  $fileName = sha1(uniqid()).".".$imageExtension;
  $imagePath = APP_PATH."assets/images/articles/".$fileName;
  $relativePath = str_replace('\\','/',dirname( __FILE__ ,2))."/assets/images/articles/".$fileName;

  // printData($imagePath);

  // check if there was an error
  if($imageError > 0){
    return ["error"=>"Something went wrong while uploading image"];
  }

  // check for format
  if(!in_array($imageExtension, $supportedFormats)){
    return ["error"=>"Unsupported file format"];
  }

  // check for file size
  if($imageSize > 5000000){
    return ["error"=>"File size must not be above 5mb"];
  }
  
  $result = move_uploaded_file( $imageTempLocation,$relativePath);

  if($result){
    return ["success"=>"Image Uploaded Successufly","url"=> $imagePath];
  }else{
    return ["error"=>"Failed to upload image"];
  }

}