<?php 
 require_once "../DB.php";
 require_once "../config.php";
 require_once "functions.php";
 require_once "helpers.php";



 if(!empty($_POST["addComment"])){
  extract($_POST);
  $formData = [];
   $formData['comment'] = sanitize($comment,"lower");
   $formData['post_id'] = sanitize($post_id,"lower");
   $formData['user_id'] = $_SESSION["customer_id"];

   $formData['comment'] = sanitize($comment,"lower");
   $result = addComment($formData);
   if($result){
     echo "success";
   }else{
     echo "error";
   }
 }



 if(!empty($_POST["likes"])){
  
   $formData["id"] = sanitize($_POST['post_id']);
   $result = updateLikes($formData);
   $post = (object) selectSingleData("article","likes","`id`='{$formData["id"]}'");
   echo $post->likes;

 }