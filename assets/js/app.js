$(document).ready(function(){

  $(".comment-form").submit(function(event){
      event.preventDefault();
      $form = $(this);
      $post_id = $form.find("input").val();
      $action = $(this).attr("action");
      $comment = $.trim($(this).find("textarea").val());
      if($comment == ""){
        $(this).find("span.error").text("Please enter a comment");
        return false;
      }else{
        $(this).find("span.error").text("");
      }

      $object = {"comment":$comment,"addComment":true,"post_id":$post_id};
      console.log($object);

      $.ajax({
          method:"POST",
          data:$object,
          url:$action,
          success:function($response){
            $res  = $.trim($response);
            if($res == "success"){
              $form.find("span.error").removeClass("text-danger").addClass("text-success").text("Comment Added successfully");
              $form.find("textarea").val("");
              $timeout = setTimeout(function(){
                $form.find("span.error").removeClass("text-success").addClass("text-danger").text("");
                clearTimeout($timeout);
                location.reload();
              },5000)
            }else if($res == "error"){
              alert("Comment failed to publish");
            }
          }
      })
      

  })
})